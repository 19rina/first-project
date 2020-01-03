<?php 
	class Dosenpem extends CI_Model{
		public function get_all(){
			return $this->db->get('dosenp')->result();
		}
		public function get_dosen_keyword($keyword){
			$this->db->select('*');
			$this->db->from('dosenp');
			$this->db->like('nama_dosen',$keyword);
			$this->db->or_like('nidn',$keyword);
			return $this->db->get()->result();
		}
	}


	