<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_all');
		$this->load->model('M_details');
		if (empty($this->session->userdata('status')) || $this->session->userdata('status') !== "LogedIn") {
			return redirect('logout');
		} else {
			if (!empty($this->session->userdata('userdata')->privilege) && $this->session->userdata('userdata')->privilege !== 'surveyor') 
			{
				return redirect('logout');		
			}
		}
	}
	public function index()
	{
		$data = [
			'active_controller' => 'all',
			'active_function' => 'index2',
			'sidebar' => 'sidebar_admin',
		];
		$data['datakpb'] 	= $this->M_all->tampil();
		
		$this->load->view('adminlte3/global/home', $data);
	}	

	public function details($id_telecenter)
		{
		$where = array('id_telecenter' => $id_telecenter);
		//
		$tb_telecenter = $this->db->query('SELECT * FROM tb_telecenter where id_telecenter=' . $id_telecenter);
		$tb_telecenter = $tb_telecenter->result()[0];
		$tb_kecamatan = $this->db->query('SELECT * FROM tb_tambahan where id_telecenter=' . $id_telecenter);
		$tb_kecamatan = $tb_kecamatan->result()[0];
		$data = [
			'tb_telecenter' => $tb_telecenter,
			'tb_kecamatan' => $tb_kecamatan,
		];

			$data = [
				'active_controller' => 'details',
				'active_function' => 'index2',
				'sidebar' => 'sidebar_admin',
			];
			$data['tb_telecenter'] = $this->M_details->edit_details($where, 'tb_telecenter')->result();


			$this->load->view('adminlte3/global/home', $data);
		}	

}
