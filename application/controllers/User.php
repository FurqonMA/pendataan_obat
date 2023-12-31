<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

        public function index() {
            $data['title'] = 'Daftar User';
            $data['User'] = $this->User_model->tampil_data()->result();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('list_user', $data);
            $this->load->view('templates/footer');
        }

        public function tambah_data() {
            $username = $this->input->post('username');
            $password = ($this->input->post('password'));
            $fullname = $this->input->post('fullname');
            $is_active = $this->input->post('is_active');

            $data = array (
                'username' => $username,
                'password' => $password,
                'fullname' => $fullname,
                'is_active' => $is_active,
            );
            $this->session->set_flashdata('success_message', 'Data telah berhasil ditambahkan.');
            $this->User_model->input_data($data,'tb_user');
            redirect('User/index');
        }

        public function edit($id_user) {
            $where = array ('id_user' => $id_user);
            $data['User'] = $this->User_model->edit_data($where,'tb_user')->result();
            $data['title'] = 'Edit Data User';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('edit_user', $data);
            $this->load->view('templates/footer');

        }

        public function update() {
            $id_user = $this->input->post('id_user');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $fullname = $this->input->post('fullname');
            $is_active = $this->input->post('is_active');
            
            $data = array(
                'username' => $username,
                'password' => $password,
                'fullname' => $fullname,
                'is_active' => $is_active,
            );
            $where = array('id_user' => $id_user);
            $this->session->set_flashdata('update_message', 'Data Telah Berhasil Diedit.');
            $this->User_model->update_data($where, $data,'tb_user');
            redirect('User/index');
        }

        public function hapus($id_user) {
            $where = array ('id_user' => $id_user);
            $this->session->set_flashdata('delete_message', 'Data telah berhasil dihapus.');
            $this->User_model->hapus_data($where, 'tb_user');
            redirect('User/index');
        }

        public function hapus_all() {
            $table = 'tb_user';
            $this->session->set_flashdata('emptytable_message', 'Semua Data Telah Berhasil Dihapus.');
            $this->db->empty_table($table);
            redirect('User/index');
        }
}