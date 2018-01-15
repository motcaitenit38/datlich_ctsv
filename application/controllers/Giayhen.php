<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Giayhen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index($msv)
	{
		
		
		// $this->load->view('email_view');
		

	}
	public function intgh($id)
	{
		// echo $msv;
		$this->load->model('Danhsach_model');
		$ingiayhen = $this->Danhsach_model->giayhen($id);
		$ingiayhen = array('khoa'=>$ingiayhen);
		// var_dump($ingiayhen);
		$this->load->view('email_view', $ingiayhen, FALSE);
	}

}

/* End of file Giayhen.php */
/* Location: ./application/controllers/Giayhen.php */