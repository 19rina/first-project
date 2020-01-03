<?php 
	class MFakultas extends CI_Model{

		public function view(){
			return $this->db->get('fakultas')->result();
		}
	}
