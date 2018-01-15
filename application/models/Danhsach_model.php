<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Danhsach_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function danhsachview1()
	{
		$this->db->select('*');
		
		$this->db->order_by('id', 'DESC');
		$dulieu = $this->db->get('datlich');
		$mang = $dulieu->result_array();
		// var_dump ($mang);
		return $mang;
	}
	public function danhsachview($thu, $ngay, $buoi)
	{
		$this->db->select('*');
		$this->db->where('thu', $thu);
		$this->db->where('ngay', $ngay);
		$this->db->where('buoi', $buoi);
		$this->db->order_by('id', 'DESC');
		$dulieu = $this->db->get('datlich');
		$mang = $dulieu->result_array();
		// var_dump ($mang);
		echo json_encode($mang);
	}
	public function giayhen($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dulieu = $this->db->get('datlich');
		$mang = $dulieu->result_array();
		return $mang;
	}
	public function xoa($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$xoa = $this->db->delete('datlich');
		return $xoa;
	}

}

/* End of file Danhsach_model.php */
/* Location: ./application/models/Danhsach_model.php */