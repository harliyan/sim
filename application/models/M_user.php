<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
	
	public function tampil() {
		$sql = " SELECT * FROM `users " ;
		$data = $this->db->query($sql);

		return $data->result();
	}
}

