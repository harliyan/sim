<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kpt extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_kpt');
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
			'active_controller' => 'kpt',
			'active_function' => 'index2',
			'sidebar' => 'sidebar_admin',
		];
		$data['datakpt'] 	= $this->M_kpt->tampil();
		
		$this->load->view('adminlte3/global/home', $data);
	}	
}
