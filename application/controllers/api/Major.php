<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Major extends CI_Controller {
    public function getByFaculty($id)
    {
        $this->load->model('MProdi');
        header('Content-Type: application/json');
        $majors = $this->MProdi->getByFaculty($id);

        echo json_encode($majors->result_array());
        return;
    }
}