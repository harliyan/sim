	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Status_perangkat extends CI_Controller {

		public function __construct() 
		{
			parent::__construct();
			$this->load->model('M_users');
			$this->load->model('M_home');
			$this->load->model('M_status');
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
				'active_controller' => 'status_perangkat',
				'active_function' => 'index2',
				'sidebar' => 'sidebar_admin'
			];
			$data['dataStatus'] 	= $this->M_status->tampil();
			$data['get_barat_count'] 	= $this->M_home->get_barat_count();
			$data['get_utara_count'] 	= $this->M_home->get_utara_count();
			$data['get_timur_count'] 	= $this->M_home->get_timur_count();
			$data['get_selatan_count'] 	= $this->M_home->get_selatan_count();	

			$this->load->view('adminlte3/global/home', $data);
		}

		public function hapus_status($id_stats){ //fungsi delete
		    $this->load->model('M_status'); //load model
		    $this->M_status->hapus_status($id_stats); //ngacir ke fungsi delTransaksi
		    $this->session->set_flashdata('success', 'Data Administrasi Wilayah Berhasil dihapus');
		    redirect('admin/status_perangkat'); //redirect
		}	

		public function tambah(){
		$this->load->view('admin/status_perangkat');
	}

		public function tambah_aksi(){

			$id_stats = $this->input->post('id_stats');
			$status = $this->input->post('status');

			$data = array(
				'id_stats' => $id_stats,
				'status' => $status,
				
			);
			$this->M_status->input_data($data,'tb_status_perangkat');
			redirect('admin/status_perangkat');
		}

		public function edit_status($id_stats)
			{

				$where = array('id_stats' => $id_stats);

				$data = [
					'active_controller' => 'Status_perangkat',
					'active_function' => 'edit',
					'sidebar' => 'sidebar_admin',
				];

				$data['tb_status_perangkat'] = $this->M_status->edit_data_status($where, 'tb_status_perangkat')->result();

				$this->load->view('adminlte3/global/home', $data);
			}	

		public function update_data_status(){
			$id_stats = $this->input->post('id_stats');
			$status = $this->input->post('status');
			
			

			$data = array(
				'status' => $status,
				
				
			);

			$where = array(
				'id_stats' => $id_stats
			);

			$this->M_status->update_data_status($where,$data,'tb_status_perangkat');
			redirect('admin/status_perangkat');
		}

	}
