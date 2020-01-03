<?php 
	class MProdi extends CI_Model{

		public function viewProdi($id_provinsi){
			return $this->db->get('fakultas')->result();
		}
		
	}
