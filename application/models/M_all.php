<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_all extends CI_Model {
	
	public function tampil() {
		$this->db->select('tb_telecenter.*, tb_kecamatan.*');
		$this->db->from('tb_telecenter');
		$this->db->join('tb_kecamatan', 'tb_telecenter.id_kecamatan = tb_kecamatan.id_kecamatan');
		return $this->db->get()->result();
	}

	// public function hapus_all ($id_telecenter){
	// 	$hasil=$this->db->query("DELETE FROM tb_telecenter WHERE id_telecenter='$id_telecenter'");
	// 	return $hasil;
	// }

	public function hapus_all($id_telecenter)
	{
	    $this->db->where('tb_telecenter.id_telecenter=tb_tambahan.id_telecenter');
	    $this->db->where('tb_telecenter.id_telecenter',$id_telecenter);
	    $this->db->delete('tb_telecenter','tb_tambahan');
}
}

