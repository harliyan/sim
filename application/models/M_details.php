<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_details extends CI_Model {
	
	public function tampil() {
		$this->db->select('tb_telecenter.*, tb_kecamatan.*');
		$this->db->from('tb_telecenter');
		$this->db->join('tb_kecamatan', 'tb_telecenter.id_kecamatan = tb_kecamatan.id_kecamatan');
		return $this->db->get()->result();
	}

	public function edit_details($where,$table){
			
		return $this->db->get_where($table, $where);
	}

	public function update_details($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

}