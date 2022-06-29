<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Pelunasan_un extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('M_pelunasan_un');
		$this->load->model('M_pengaturan');
		$this->load->model('M_ketentuan_pembayaran');
	}

	public function index()
	{
		$data['title']                = 'Pelunasan UN';
		$tahun_ajaran                 = $this->M_pengaturan->tampil()->row_array();
		$data['pelunasan_un']         = $this->M_pelunasan_un->tampil($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['total']                = $this->M_pelunasan_un->total($tahun_ajaran['tahun_ajaran'])->row_array();
		$data['ketentuan_pembayaran'] = $this->M_ketentuan_pembayaran->tampil($tahun_ajaran['tahun_ajaran'])->row_array();
		$this->template->view('pelunasan_un/index', $data);
	}

	public function tambah()
	{
		$data['title'] = 'Tambah';
		$data['tahun_ajaran'] = $this->M_pengaturan->tampil()->row_array();
		$this->template->view('pelunasan_un/tambah', $data);

		if( isset($_POST['tambah']) ){
			$this->M_pelunasan_un->tambah();
			redirect('pelunasan_un');
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Edit';
		$data['pelunasan_un'] = $this->M_pelunasan_un->tampil_perId($id)->row_array();
		$this->template->view('pelunasan_un/edit', $data);

		if( isset($_POST['simpan']) ){
			$this->M_pelunasan_un->edit($id);
			redirect('pelunasan_un');
		}
	}

	public function hapus()
	{
		$id = $this->input->post('id');

		if( $id != '' ){
			$this->M_pelunasan_un->hapus($id);
			redirect('pelunasan_un');
		} else {
			?>
				<script>
					alert('Harap centang data yang ingin dihapus');
					window.location.href = "<?= base_url('pelunasan_un'); ?>";
				</script>
			<?php
		}
	}

	public function cetak()
	{
		$data['title']                = 'Rekap Pelunasan UN';
		
		$tahun_ajaran                 = $this->M_pengaturan->tampil()->row_array();
		$data['pelunasan_un']         = $this->M_pelunasan_un->tampil($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['total']                = $this->M_pelunasan_un->total($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['ketentuan_pembayaran'] = $this->M_ketentuan_pembayaran->tampil($tahun_ajaran['tahun_ajaran'])->row_array();
		$data['tahun_ajaran']         = $tahun_ajaran;
		$this->template->print('pelunasan_un/cetak', $data);
	}

	public function import()
	{
		$this->template->view('pelunasan_un/import');
	}

	public function upload()
	{
		$old_file = (scandir('import/un/')[2]);
		unlink('import/un/' . $old_file);

		$config['upload_path'] = './import/un/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'pelunasan_un';
        $this->load->library('upload', $config);
        if ( $this->upload->do_upload('importexcel') ) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->setShouldFormatDates(true);

            $reader->open('import/un/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $datasiswa = array(
							'nama'         => $row->getCellAtIndex(0)->getValue(),
							'kelas'        => $row->getCellAtIndex(1)->getValue(),
							'tanggal'      => tglExcel($row->getCellAtIndex(2)->getValue()),
							'nominal'      => $row->getCellAtIndex(3)->getValue(),
							'diskon'       => $row->getCellAtIndex(4)->getValue(),
							'tahun_ajaran' => $row->getCellAtIndex(5)->getValue()
                        );
                        $this->M_pelunasan_un->import_data($datasiswa);
                    }
                    $numRow++;
                }
                $reader->close();
                redirect('pelunasan_un');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        };
	}
}