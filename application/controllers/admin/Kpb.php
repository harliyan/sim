<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kpb extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_kpb');
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
			'active_controller' => 'kpb',
			'active_function' => 'index',
			'sidebar' => 'sidebar_admin',
		];
		$data['datakpb'] 	= $this->M_kpb->tampil();
		
		$this->load->view('adminlte3/global/home', $data);
	}	

	public function hapus_kpb ($id_telecenter){ //fungsi delete
		    $this->load->model('M_kpb'); //load model
		    $this->M_kpb->hapus_kpb($id_telecenter); //ngacir ke fungsi delTransaksi
		    redirect('admin/kpb'); //redirect
		}	
}
