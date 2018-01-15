<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Danhsach extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// $this->load->view('danhsach_view');
		$this->load->model('Danhsach_model');
		$dulieu = $this->Danhsach_model->danhsachview1();
		$mang = array('khoa'=>$dulieu);
		$this->load->view('danhsach_view', $mang, FALSE);
	}
	public function danhsachview()
	{
		$thu = $this->input->post('thu');
		$ngay = $this->input->post('ngay');
		$buoi = $this->input->post('buoi');
		$this->load->model('Danhsach_model');
		// $this->load->helper('url');
		// echo $thu;
		$data = $this->Danhsach_model->danhsachview($thu, $ngay, $buoi);

		if($data>0)
		{			
			$dulieumang = array('khoa'=>$data);	
			// echo json_decode($dulieumang);
		}
		else {
			
			// echo json_encode($dm);
		}
	}

}

/* End of file Danhsach.php */
/* Location: ./application/controllers/Danhsach.php */