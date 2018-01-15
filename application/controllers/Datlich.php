<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datlich extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('datlich_view.php');
	}
	function Demomail()
	{
		$this->load->view('email_view');
	}
	
	public function ajax()
	{
		$hoten = $this->input->post('hoten');
		$email = $this->input->post('email');
		$dt = $this->input->post('dt');
		$msv = $this->input->post('msv');
		$thu = $this->input->post('thu');
		$ngay = $this->input->post('ngay');
		$buoi = $this->input->post('buoi');
		$time = $this->input->post('time');
		$noidung = $this->input->post('noidung');
		
		
		$this->load->model('Datlich_model');
		// $this->load->helper('url');
		
		// $data1 = array('khoa'=>$data1);
		$data = $this->Datlich_model->addData($hoten, $email, $dt, $msv, $thu, $ngay, $buoi, $time, $noidung);
		$data1= array(
			'hoten'=>$hoten,
			'msv'=>$msv,
			'thu'=>$thu,
			'ngay'=>$ngay,
			'buoi'=>$buoi,
			'time'=>$time,
			'noidung'=>$noidung,
			'id'=>$data
		);
		// bat dau cau hinh gui mail
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			  'smtp_user' => 'phongctsvhumg@gmail.com', // change it to yours
			  'smtp_pass' => 'wkvnyzfgarlcjikt', // change it to yours
			  'mailtype' => 'html',
			  'charset' => 'utf-8',
			  'wordwrap' => TRUE
			);

		// $message = 'Gửi mail thành công';
		
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
      $this->email->from('clubithumg@gmail.com','Phòng Công tác Sinh viên - HUMG'); // change it to yours
      $this->email->to($email);// change it to yours
      $this->email->subject('Giấy hẹn làm việc');
      // $this->email->set_header('Header1', 'Đại ca Trường');
      // $message = $this->load->view('email_view', $data1, TRUE);
      $message = $this->load->view('link_view',$data1, True);
      $this->email->message($message);
      if($data>0)
      {			
      	$this->email->send();   
      	echo $data;		
      }
      else {

      	echo json_encode($dm);
      }


  }
  public function dieukien()
  {
  	$buoi = $this->input->post('buoi');
  	$ngay = $this->input->post('ngay');
  	$this->load->model('Datlich_model');
		// $this->load->helper('url');
  	if($this->Datlich_model->dieukien($buoi, $ngay))
  	{
			// redirect('Danhsach','refresh');
  		echo 'thanh cong xet dieu kien';
			// $this->load->view('danhsach_view');
  	}
  	else {
  		echo 'that bai xet dieu kien';
  	}
  }

}

/* End of file datlich.php */
/* Location: ./application/controllers/datlich.php */