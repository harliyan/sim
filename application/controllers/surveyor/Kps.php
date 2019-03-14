<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kps extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_kps');
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
			'active_controller' => 'kps',
			'active_function' => 'index2',
			'sidebar' => 'sidebar_admin',
		];
		$data['datakps'] 	= $this->M_kps->tampil();
		
		$this->load->view('adminlte3/global/home', $data);
	}	
}
