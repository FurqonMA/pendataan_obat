<?php

class Login_model extends CI_Model {
    public function ambillogin($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('tb_user');
        
        if ($query->num_rows() > 0) {
            $row = $query->row();
            if ($row->is_active == 'aktif') {
                // Jika status user aktif, simpan data ke dalam sesi dan arahkan ke dashboard
                $sess = array (
                    'username' => $row->username,
                    'password' => $row->password,
                    'fullname' => $row->fullname,
                );
                $this->session->set_userdata($sess);
                redirect('Admin');
            } else {
                // Jika status user tidak aktif, beri pesan error
                $this->session->set_flashdata('error', 'Maaf, akun Anda tidak aktif. Hubungi admin untuk aktivasi akun.');
                redirect('Login');
            }
        } else { 
            // Jika login tidak berhasil
            $this->session->set_flashdata('error', 'Maaf, data Anda tidak ada.');
            redirect('Login');
        }
    }
    

    public function is_logged_in(){
        return $this->session->userdata('username') !== null;
    }

}