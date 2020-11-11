<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Pembayaran_uas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('M_pembayaran_uas');
		$this->load->model('M_pengaturan');
		$this->load->model('M_ketentuan_pembayaran');
	}

	public function index()
	{
		$data['title']                = 'Pembayaran UAS';
		$tahun_ajaran                 = $this->M_pengaturan->tampil()->row_array();
		$data['pembayaran_uas']       = $this->M_pembayaran_uas->tampil($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['total']                = $this->M_pembayaran_uas->total($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['ketentuan_pembayaran'] = $this->M_ketentuan_pembayaran->tampil($tahun_ajaran['tahun_ajaran'])->row_array();
		$this->template->view('pembayaran_uas/index', $data);
	}

	public function tambah()
	{
		$data['title']        = 'Tambah Pembayaran UAS';
		$data['tahun_ajaran'] = $this->M_pengaturan->tampil()->row_array();
		$this->template->view('pembayaran_uas/tambah', $data);

		if( isset($_POST['tambah']) ){
			$this->M_pembayaran_uas->tambah();
			redirect('pembayaran_uas');
		}
	}

	public function edit($id)
	{
		$data['title']          = 'Edit Pembayaran UAS';
		$data['pembayaran_uas'] = $this->M_pembayaran_uas->tampil_perId($id)->row_array();
		$this->template->view('pembayaran_uas/edit', $data);

		if( isset($_POST['simpan']) ){
			$this->M_pembayaran_uas->edit($id);
			redirect('pembayaran_uas');
		}
	}

	public function hapus()
	{
		$id = $this->input->post('id');

		if( $id != '' ){
			$this->M_pembayaran_uas->hapus($id);
			redirect('pembayaran_uas');
		} else {
			?>
				<script>
					alert('Harap centang data yang ingin dihapus');
					window.location.href = "<?= base_url('pembayaran_uas'); ?>";
				</script>
			<?php
		}
	}

	public function cetak()
	{
		$data['title']                = 'Rekap Pelunasan Pembayaran UAS';
		$tahun_ajaran                 = $this->M_pengaturan->tampil()->row_array();
		$data['pembayaran_uas']       = $this->M_pembayaran_uas->tampil($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['total']                = $this->M_pembayaran_uas->total($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['ketentuan_pembayaran'] = $this->M_ketentuan_pembayaran->tampil($tahun_ajaran['tahun_ajaran'])->row_array();
		$data['tahun_ajaran']         = $tahun_ajaran;
		$this->template->view('pembayaran_uas/cetak', $data);

		?>
			<script>window.print()</script>
		<?php
	}

	public function import()
	{
		$this->template->view('pembayaran_uas/import');
	}

	public function upload()
	{
		$config['upload_path'] = './import/uas/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ( $this->upload->do_upload('importexcel') ) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();

            $reader->open('import/uas/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $datasiswa = array(
							'nama'         => $row->getCellAtIndex(0),
							'kelas'        => $row->getCellAtIndex(1),
							'tanggal'      => $row->getCellAtIndex(2),
							'nominal'      => $row->getCellAtIndex(3),
							'diskon'       => $row->getCellAtIndex(4),
							'tahun_ajaran' => $row->getCellAtIndex(5)
                        );
                        $this->M_pembayaran_uas->import_data($datasiswa);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('import/uas/' . $file['file_name']);
                redirect('pembayaran_uas');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        };
	}
}