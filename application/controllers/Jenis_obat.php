<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_obat extends CI_Controller {
    public function index()
	{
		$data['title'] = 'Daftar Jenis Obat';
		$data['Jenis_obat'] = $this->Jenis_obat_model->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('list_jenis_obat', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_data() {
		$nama_jenis_obat	= $this->input->post('nama_jenis_obat');

		$data = array (
			'nama_jenis_obat'	=> $nama_jenis_obat,
		);

		$this->Jenis_obat_model->input_data($data, 'tb_jenis_obat');
		redirect('Jenis_obat/index');
	}

	public function edit($id_jenis_obat) {
		$where = array('id_jenis_obat' => $id_jenis_obat);
		$data['Jenis_obat'] = $this->Jenis_obat_model->edit_data($where,'tb_jenis_obat')->result();

		$data['title'] = 'Daftar Jenis Obat';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('edit_jenis_obat', $data);
		$this->load->view('templates/footer');
		
	}

	public function update() {
		$id_jenis_obat = $this->input->post('id_jenis_obat');
		$nama_jenis_obat = $this->input->post('nama_jenis_obat');

		$data = array (
			'nama_jenis_obat' => $nama_jenis_obat,
		);

		$where = array(
			'id_jenis_obat' => $id_jenis_obat
		);

		$this->Jenis_obat_model->update_data($where, $data, 'tb_jenis_obat');
		redirect('Jenis_obat/index');
	}
 
	public function hapus($id_jenis_obat) {
		$where = array('id_jenis_obat' => $id_jenis_obat);
		$this->Jenis_obat_model->hapus_data($where, 'tb_jenis_obat');
		redirect('Jenis_obat/index');
	}
}