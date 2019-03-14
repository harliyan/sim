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
			if (!empty($this->session->userdata('userdata')->privilege) && $this->session->userdata('userdata')->privilege !== 'admin') 
			{
				return redirect('logout');		
			}
		}
	}
	public function index()
	{
		$data = [
			'active_controller' => 'all',
			'active_function' => 'index',
			'sidebar' => 'sidebar_admin',
		];
		$data['datakpb'] 	= $this->M_all->tampil();
		
		$this->load->view('adminlte3/global/home', $data);
	}	

	// public function hapus_all($id = FALSE)
	// 	{
	// 	  $this->load->model('M_all');
	// 			// $del = $this->url->segment (5);
	// 			//delete tabel admin

	// 	  $query = $this->db->query('DELETE FROM tb_telecenter WHERE id_telecenter ="'.$id.'"');
	// 	  $query = $this->db->query('DELETE FROM tb_tambahan WHERE id_telecenter ="'.$id.'"');
		  
	// 	  redirect(base_url('admin/all'));
	// 	}

	public function details($id_telecenter)
		{
			$where = array('id_telecenter' => $id_telecenter);
			$data = [
				'active_controller' => 'details',
				'active_function' => 'index',
				'sidebar' => 'sidebar_admin',
			];
			$data['tb_telecenter'] = $this->M_details->edit_details($where, 'tb_telecenter')->result();


			$this->load->view('adminlte3/global/home', $data);
		}	

	public function hapus($id_telecenter){ //fungsi delete
		$where = array('id_telecenter' => $id_telecenter);
		$this->M_details->hapus($where,'tb_telecenter');
		$this->M_details->hapus($where,'tb_tambahan');
	    redirect('admin/all'); //redirect
	}
}
