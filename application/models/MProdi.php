<?php 
	class MProdi extends CI_Model{

		public function viewProdi($id_provinsi){
			return $this->db->get('fakultas')->result();
		}
		
		public function getByFaculty($facultyID)
		{
			return $this->db->get_where('prodi', ['id_fakultas' => $facultyID]);
		}
	}
