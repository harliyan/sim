<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ket_perangkat extends CI_Model {
	
	public function tampil() {
		$sql = " SELECT * FROM `tb_ket_perangkat " ;
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function hapus_ket ($id_ket){
		$hasil=$this->db->query("DELETE FROM tb_ket_perangkat WHERE id_ket='$id_ket'");
		return $hasil;
	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_ket($where,$table){		
		return $this->db->get_where($table, $where);
	}

	public function update_ket($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}

