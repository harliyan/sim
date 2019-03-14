<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {
	
	public function get_barat_count() {
		$sql = " SELECT count(*) as count from tb_telecenter where id_kecamatan = '1' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_utara_count() {
		$sql = " SELECT count(*) as count from tb_telecenter where id_kecamatan = '2' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_timur_count() {
		$sql = " SELECT count(*) as count from tb_telecenter where id_kecamatan = '3' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_selatan_count() {
		$sql = " SELECT count(*) as count from tb_telecenter where id_kecamatan = '4' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_all_count() {
		$sql = " SELECT count(*) as count from tb_telecenter" ;
		$data = $this->db->query($sql);

		return $data->result();
	}
}
