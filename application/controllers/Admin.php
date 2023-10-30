<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
{
    parent::__construct();
    if (!$this->Login_model->is_logged_in()) {
        $this->session->set_flashdata('error', 'Anda harus login terlebih dahulu.');
        redirect('Login');
    }
}


	public function index()
	{
		$data['title'] 			= 'Pendataan Obat';
		$data['dataAllObat'] 	= $this->db->count_all_results('tb_obat');
		$data['dataAllUser'] 	= $this->db->count_all_results('tb_user');
		$data['dataAllJenis'] 	= $this->db->count_all_results('tb_jenis_obat');
		$data['expired']		= $this->db->query("SELECT count(id_obat) as id from tb_obat where tanggal_expired < CURRENT_DATE")->row()->id;
		$data['no_expired']		= $this->db->query("SELECT count(id_obat) as id from tb_obat where tanggal_expired > CURRENT_DATE")->row()->id;
		$data['aktif']		= $this->db->query("SELECT count(id_user) as id from tb_user where is_active = 'aktif' ")->row()->id;
		$data['tidak_aktif']		= $this->db->query("SELECT count(id_user) as id from tb_user where is_active = 'tidak aktif' ")->row()->id;
		$data['Obat']		  	= $this->Obat_model->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard',$data);
		$this->load->view('templates/footer');
	}
}
