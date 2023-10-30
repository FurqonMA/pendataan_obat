<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

    public function index() {
        $data['title'] = 'Daftar Obat';
        $data['Obat']  = $this->Obat_model->tampil_data()->result();
        $data['Jenis'] = $this->Obat_model->tampiljenis()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('list_obat', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_data() {
        $id_jenis_obat      = $this->input->post('id_jenis_obat');
        $nama_obat          = $this->input->post('nama_obat');
        $satuan             = $this->input->post('satuan');
        $harga              = $this->input->post('harga');
        $stok               = $this->input->post('stok');
        $tanggal_expired    = $this->input->post('tanggal_expired');

        $data = array(
            'id_jenis_obat'           => $id_jenis_obat,
            'nama_obat'               => $nama_obat,
            'satuan'                  => $satuan,
            'harga'                   => $harga,
            'stok'                    => $stok,
            'tanggal_expired'         => $tanggal_expired,
        );
        $this->session->set_flashdata('success_message', 'Data Telah Berhasil Ditambah.');
        $this->Obat_model->input_data($data,'tb_obat');
        redirect('Obat/index',$data);
    }

    public function edit($id_obat) {
        $where = array('id_obat' => $id_obat);
        $data['title'] = 'Edit Data Obat';
        $data['Obat']  = $this->Obat_model->edit_data($where,'tb_obat')->result();
        $data['Jenis'] = $this->Obat_model->tampiljenis()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('edit_obat', $data);
        $this->load->view('templates/footer');
    }

    public function update() {
        $id_obat            = $this->input->post('id_obat');
        $id_jenis_obat      = $this->input->post('id_jenis_obat');
        $nama_obat          = $this->input->post('nama_obat');
        $satuan             = $this->input->post('satuan');
        $harga              = $this->input->post('harga');
        $stok               = $this->input->post('stok');
        $tanggal_expired    = $this->input->post('tanggal_expired');

        $data = array(
            'id_jenis_obat'     => $id_jenis_obat,
            'nama_obat'         => $nama_obat,
            'satuan'            => $satuan,
            'harga'             => $harga,
            'stok'              => $stok,
            'tanggal_expired'   => $tanggal_expired,
        );

        $where = array('id_obat' => $id_obat);
        $this->session->set_flashdata('update_message', 'Data Telah Berhasil Diedit.');
        $this->Obat_model->update_data($where, $data,'tb_obat');
        redirect('Obat/index');
    }

    public function hapus($id_obat) {
        $where = array('id_obat' =>$id_obat);
        $this->session->set_flashdata('delete_message', 'Data Telah Berhasil Dihapus.');
        $this->Obat_model->hapus_data($where, 'tb_obat');
        redirect('Obat/index');
    }

    public function hapus_all() {
        $table_name = 'tb_obat';
        $this->session->set_flashdata('emptytable_message', 'Semua Data Telah Berhasil Dihapus.');
        $this->db->empty_table($table_name);
        redirect('Obat/index');
    }
}