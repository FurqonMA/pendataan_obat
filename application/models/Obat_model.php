<?php 

class Obat_model extends CI_Model {

    public function tampil_data() {
        $this->db->select('tb_jenis_obat.nama_jenis_obat,tb_obat.id_obat,tb_obat.nama_obat,tb_obat.satuan,tb_obat.harga,tb_obat.stok,tb_obat.tanggal_expired');
        $this->db->from('tb_jenis_obat');
        $this->db->join('tb_obat', 'tb_obat.id_jenis_obat = tb_jenis_obat.id_jenis_obat');
        $query = $this->db->get();
        return $query;
    }
    
    public function tampiljenis() {
        return $this->db->get('tb_jenis_obat');
    }

    public function input_data($data, $table) {
        $this->db->insert($table, $data);
    }

    public function edit_data($where, $table) {
        return $this->db->get_where($table, $where);
        return $this->db->get('tb_jenis_obat')->result_array();
    }

    public function update_data($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

}