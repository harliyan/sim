<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kpb extends CI_Model {
	
	public function tampil() {
		$this->db->select('tb_telecenter.*');
		$this->db->from('tb_telecenter');
		$where = "id_kecamatan='1'";
		$this->db->where($where);
		return $this->db->get()->result();
	}

	public function hapus_status ($id_stats){
		$hasil=$this->db->query("DELETE FROM tb_status_perangkat WHERE id_stats='$id_stats'");
		return $hasil;
	}

	public function hapus_kpb ($id_telecenter){
		$hasil=$this->db->query("DELETE FROM tb_telecenter WHERE id_telecenter='$id_telecenter'");
		return $hasil;
	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_data_status($where,$table){		
		return $this->db->get_where($table, $where);
	}

	public function update_data_status($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}

