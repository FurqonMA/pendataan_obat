<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        $this->load->view('loginpage');

	}

    public function _rules() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }

    public function ceklogin() {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
        $this->load->view('loginpage');
    } else {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->Login_model->ambillogin($username, $password);
    }
}

public function logout() {
    $this->session->set_userdata('username', FALSE);
    $this->session->sess_destroy();
    redirect('Login');
}


}
