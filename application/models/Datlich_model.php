	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Datlich_model extends CI_Model {

		public $variable;

		public function __construct()
		{
			parent::__construct();
			
		}
		public function addData($hoten, $email, $dt, $msv, $thu, $ngay, $buoi, $time, $noidung)
		{
			$this->db->select('*');
			// $this->db->where('thu', $a);
			$this->db->where('buoi', $buoi);
			$this->db->where('ngay', $ngay);
			// $this->db->where('msv', $msv);
			$query = $this->db->get('datlich');	

			$sodong = $query->num_rows();
			if($sodong <=10){
				$this->db->where('buoi', $buoi);
				$this->db->where('ngay', $ngay);
				$this->db->where('msv', $msv);
				$query = $this->db->get('datlich');				
				$sodong = $query->num_rows();
				if($sodong<1){
				$mang = array(
				'hoten'=> $hoten,
				'email'=> $email,
				'dt'=> $dt,
				'msv'=> $msv,
				'thu'=> $thu,
				'ngay'=> $ngay,
				'buoi'=> $buoi,
				'time'=> $time,
				'noidung'=> $noidung
			);
			$this->db->insert('datlich', $mang);
			return $this->db->insert_id();
			}
				}
				// echo 'van con';
				
			else {
				echo 'het cho';
				}
		}
		
	}

	/* End of file datlich_model.php */
	/* Location: ./application/models/datlich_model.php */