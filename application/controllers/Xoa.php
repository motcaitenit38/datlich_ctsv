<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Xoa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}
	public function xoa1()
	{
		$id = $this->input->post('id');
		$this->load->model('Danhsach_model');
		$dulieu = $this->Danhsach_model->xoa($id);
		if($dulieu>0){
			echo $dulieu;
		}
		else {
			echo 'that bai';
		}
	}

}

/* End of file Xoa.php */
/* Location: ./application/controllers/Xoa.php */