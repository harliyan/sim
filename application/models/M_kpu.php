<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kpu extends CI_Model {
	
	public function tampil() {
		$this->db->select('tb_telecenter.*');
		$this->db->from('tb_telecenter');
		$where = "id_kecamatan='2'";
		$this->db->where($where);
		return $this->db->get()->result();
	}
}