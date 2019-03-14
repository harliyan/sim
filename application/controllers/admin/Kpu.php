<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kpu extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_kpu');
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
			'active_controller' => 'kpu',
			'active_function' => 'index',
			'sidebar' => 'sidebar_admin',
		];
		$data['datakpu'] 	= $this->M_kpu->tampil();
		
		$this->load->view('adminlte3/global/home', $data);
	}	
}
