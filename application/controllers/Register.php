<?php 

class Register extends CI_Controller {
    public function index()
	{
        $this->load->view('registerpage');

	}

    public function register() {
        // Validasi data dari form
        $this->form_validation->set_rules('fullname', 'Fullname', 'required[tb_user.fullname]');
        $this->form_validation->set_rules('username', 'Username', 'required[tb_user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');
    
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('registerpage'); // Menampilkan form pendaftaran
        } else {
            // Jika validasi berhasil, simpan data pengguna ke database
            $data = array(
                'fullname' => $this->input->post('fullname'), 
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'is_active' => 'tidak aktif',
            );
    
            $this->db->insert('tb_user', $data);
    
            // Redirect ke halaman login atau halaman lain sesuai kebutuhan
            redirect('Login');
        }
    }
}