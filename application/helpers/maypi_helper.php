<?php

function total_hutang($jenis_dana)
{
	$ci = get_instance();

	$tahun_ajaran = $ci->M_pengaturan->tampil()->row_array()['tahun_ajaran'];

	$ci->db->select_sum('nominal');

	if( $jenis_dana == 'Infaq_Denda' ){
		$query = $ci->db->get_where('hutang', ['tahun_ajaran' => $tahun_ajaran, 'jenis_dana' => $jenis_dana])->row_array();
		return $query['nominal'];
	}

	if( $jenis_dana == 'UAS' ){
		$query = $ci->db->get_where('hutang', ['tahun_ajaran' => $tahun_ajaran, 'jenis_dana' => $jenis_dana])->row_array();
		return $query['nominal'];
	}

	if( $jenis_dana == 'UN' ){
		$query = $ci->db->get_where('hutang', ['tahun_ajaran' => $tahun_ajaran, 'jenis_dana' => $jenis_dana])->row_array();
		return $query['nominal'];
	}
}

function active($param)
{
	$ci = get_instance();

	if( $ci->uri->segment(1) == $param ){
		echo "active";
	}
}

function show($param)
{
	$ci = get_instance();

	if( $ci->uri->segment(1) == $param ){
		echo "show";
	}	
}

function tgl($tanggal)
{
	$tanggal = date('d-m-Y', strtotime($tanggal));
	return $tanggal;
}

function cekLogin()
{
	$ci = get_instance();

	if( !$ci->session->userdata('username') ){
		redirect('auth/login');
	}
}

function userLogin()
{
	$ci = get_instance();

	$ci->load->model('M_user');
	$username = $ci->session->userdata('username');
	$user     = $ci->M_user->tampil_perUsername($username)->row_array();

	return $user;
}

function cekLogout()
{
	$ci = get_instance();

	if( $ci->session->userdata('username') ){
		redirect('home');
	}
}

function bulan(){
	$bulan = date ("F");

	switch($bulan){
		case 'January':
			$bulan_ini = "Januari";
		break;

		case 'February':
			$bulan_ini = "Ferbuari";
		break;

		case 'March':
			$bulan_ini = "Maret";
		break;

		case 'April':
			$bulan_ini = "April";
		break;

		case 'May':
			$bulan_ini = "Mei";
		break;

		case 'June':
			$bulan_ini = "Juni";
		break;

		case 'July':
			$bulan_ini = "Juli";
		break;

		case 'August':
			$bulan_ini = "Agustus";
		break;

		case 'September':
			$bulan_ini = "September";
		break;

		case 'October':
			$bulan_ini = "Oktober";
		break;

		case 'November':
			$bulan_ini = "November";
		break;

		case 'December':
			$bulan_ini = "Desember";
		break;

		default:
			$bulan_ini = "Tidak di ketahui";
		break;
	}

	return $bulan_ini;

}
