<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kpt extends CI_Model {
	
	public function tampil() {
		$this->db->select('tb_telecenter.*');
		$this->db->from('tb_telecenter');
		$where = "id_kecamatan='3'";
		$this->db->where($where);
		return $this->db->get()->result();
	}
}