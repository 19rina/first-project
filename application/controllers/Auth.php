<?php
class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }


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



    public function login(){
        $this->form_validation->set_rules('nim', 'Nim', 'trim|required');
        // $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false){
            $data['judul'] = 'Halaman Login';
        $this->load->view('template/auth_vheader', $data);
        $this->load->view('auth/login');
        $this->load->view('template/auth_vfooter');
        }
        else{
            //ketika validasi lolos atau sukses
            $this->_login();
        }
    }

    private function _login(){
        $nim = $this->input->post('nim'); //ngambil email yang ada di elemen email
        // $email = $this->input->post('email'); //ngambil email yang ada di elemen email
        $password = $this->input->post('password'); //ngambil password yang ada di elemen email

        //$user = $this->db->get_where('user',['email=> $email'])->row_array();
        $mhs = $this->db->get_where('mhs',['nim'=> $nim])->row_array();
        // var_dump($user);
        // die;
        if($mhs){
            if ($mhs['is_active'] == 1){
                if (password_verify($password,$mhs['password'])){
                    $data =[
                        'nim'=> $mhs['nim'],
                        // 'email'=> $user['email'],
                        'role_id'=> $mhs['role_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('user');

                } else {
                    $this->session->set_flashdata('massage','<div class="alert alert-danger" role="alert">
                Wrong Password
              </div>');
                //setelah database berhasil masuk, kita  redirect ke halaman index auth.
                redirect('auth');

                }

            } else{
                $this->session->set_flashdata('massage','<div class="alert alert-danger" role="alert">
                This Email has not been activated!
              </div>');
                //setelah database berhasil masuk, kita  redirect ke halaman index auth.
                redirect('auth');

            }

        } else{ 
            $this->session->set_flashdata('massage','<div class="alert alert-danger" role="alert">
            Email is not registered!
          </div>');
            //setelah database berhasil masuk, kita  redirect ke halaman index auth.
            redirect('auth');

        }
    }
    
    public function registration(){

        //aturan untuk kolom inputan pada form

        $this->form_validation->set_rules('name', 'Name', 'required|trim|alphabets_text_field');
        $this->form_validation->set_rules('nim', 'Nim', 'required|trim|is_unique[mhs.nim]',[
            'is_unique' => 'This nim has already registered'
            ]);
            
        $this->form_validation->set_rules('fakultas', 'Fakultas', 'required|trim');
        $this->form_validation->set_rules('prodi', 'Prodi', 'required|trim');
        // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',[
        //     'is_unique' => 'This Email has already registered'
        // ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|
min_length[3]|matches[password2]',[
    'min_lenght' => 'Password too short!',
    'matches' => 'Password dont matches'
]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        //logika untuk mengembalikan tampilan apabila form_validasi nya gagal
        if ($this->form_validation->run() == false ){
            $this->load->helper('url');

            $data['judul'] = 'Halaman Regis';

        $this->load->view('template/auth_vheader', $data);
        $this->load->view('auth/vregistration');
        $this->load->view('template/auth_vfooter');
        } else {
            //membuat sebuah variabel utk isian perintah memasukkan apa yang diinputkan di form input
            //lalu memasukkan di tabel database 
            $data = [
                'id_fakultas' => htmlspecialchars($this->input->post('name',true)),
                'name' => htmlspecialchars($this->input->post('name',true)),
                'name' => htmlspecialchars($this->input->post('name',true)),
                'name' => htmlspecialchars($this->input->post('name',true)),
                'nim' => htmlspecialchars($this->input->post('nim',true)),
                // 'email' => htmlspecialchars($this->input->post('email',true)),
                'image' => 'default.jpg',
                //'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            //memasukkan variabel tadi ke tabel user
            $this->db->insert('mhs',$data);
            // $this->db->insert('user',$data);

            //Kasih pesan sebelum redirect Buat flashdata pakai session
            $this->session->set_flashdata('massage','<div class="alert alert-success" role="alert">
            Congrats your account has been ceated!
          </div>');
            //setelah database berhasil masuk, kita  redirect ke halaman index auth.
            redirect('auth');
        } 
        
    }

    public function logout(){
        $this->session->unset_userdata('nim');
        // $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        //Kasih pesan sebelum redirect Buat flashdata pakai session
        $this->session->set_flashdata('massage','<div class="alert alert-success" role="alert">
        You have been logged out!
      </div>');
        //setelah database berhasil masuk, kita  redirect ke halaman index auth.
        redirect('auth');
    }



public function fbimbing(){
     
    $this->load->helper('url');
    $data['Bimbing'] = 'Halaman Dosen Pembimbing';
    $data['bimbing'] = $this->dosenpem->get_all();
     
    $this->load->view('dbimbing/vheader', $data);
    //$this->load->view('dbimbing/dosenp',$data);
    $this->load->view('dbimbing/index');
    $this->load->view('dbimbing/template/vfooter');   
}
public function search(){
 $this->load->view('dbimbing/vheader', $data);
  $keyword = $this->input->post('keyword');
  $data['bimbings']=$this->dosenpem->get_dosen_keyword($keyword);
  $this->load->view('dbimbing/cari',$data);
          $this->load->view('dbimbing/template/vfooter');
}

}
