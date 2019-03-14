<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_status extends CI_Model {
	
	public function tampil() {
		$sql = " SELECT * FROM `tb_status_perangkat " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function hapus_status ($id_stats){
		$hasil=$this->db->query("DELETE FROM tb_status_perangkat WHERE id_stats='$id_stats'");
		return $hasil;
	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_status($where,$table){		
		return $this->db->get_where($table, $where);
	}

	public function update_status($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}

