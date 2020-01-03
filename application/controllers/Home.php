<?php
class Home extends CI_Controller {
    function index()
	{
        $this->load->helper('url');
        $data['judul'] = 'Halaman Home';
        $this->load->view('template/home/vheader', $data);
        $this->load->view('home/index');
        $this->load->view('template/home/vfooter');
    }

    public function lihat(){
        $this->load->helper('url');
        ////$data['judul'] = 'Halaman Home';
        // $this->load->view('template/home/vheader');
        // $this->load->view('home/vimhs');
        // $this->load->view('template/home/vfooter');
        $data['judul'] = 'Halaman Home';
        $this->load->view('template/home/vheader', $data);
        $this->load->view('home/vimhs');
        $this->load->view('template/home/vfooter');
        
    }
    public function fti(){
        $this->load->helper('url');
        $data['judul'] = 'Halaman Home';
        $this->load->view('template/home/vheader', $data);
        $this->load->view('home/fti');
        $this->load->view('template/home/vfooter');
        
    }
}

    function login()
    {
        $data['judul2'] = 'Halaman Login';
        $this->load->view('template/login/vheader', $data);
        $this->load->view('template/login/visi');
        $this->load->view('template/login/vfooter');
    }
    