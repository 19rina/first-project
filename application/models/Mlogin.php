<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Model {

	
	public function getUser()
	{
        
        $q = $this->db->get('user');
        return $q->result();
    }
    
    public function get
	
}