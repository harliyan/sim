<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
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
			'active_controller' => 'Details',
			'active_function' => 'index',
			'sidebar' => 'sidebar_admin',
		];
		$data['datadetails'] 	= $this->M_details->tampil();
		
		$this->load->view('adminlte3/global/home', $data);
	}	

	public function edit_details($id_telecenter)
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

	public function update_details(){
			$id_details = $this->input->post('id_details');
			$status = $this->input->post('status');

			$data = array(
				'status' => $status,
			);

			$where = array(
				'id_stats' => $id_stats
			);

			$this->M_details->update_details($where,$data,'tb_telecenter');
			redirect('admin/status_perangkat');
		}
}
