<?php 

class Template {

	public function view($view, $param=null)
	{
		$ci = get_instance();

		$ci->load->view('template/header', $param);
		$ci->load->view($view);
		$ci->load->view('template/footer');
	}
}