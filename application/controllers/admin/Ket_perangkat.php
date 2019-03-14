	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Ket_perangkat extends CI_Controller {

		public function __construct() 
		{
			parent::__construct();
			$this->load->model('M_users');
			$this->load->model('M_home');
			$this->load->model('M_ket_perangkat');
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
				'active_controller' => 'ket_perangkat',
				'active_function' => 'index',
				'sidebar' => 'sidebar_admin'
			];
			$data['dataKeterangan'] 	= $this->M_ket_perangkat->tampil();
			$data['get_barat_count'] 	= $this->M_home->get_barat_count();
			$data['get_utara_count'] 	= $this->M_home->get_utara_count();
			$data['get_timur_count'] 	= $this->M_home->get_timur_count();
			$data['get_selatan_count'] 	= $this->M_home->get_selatan_count();

			$this->load->view('adminlte3/global/home', $data);
		}

		public function hapus_ket($id_ket){ //fungsi delete
		    $this->load->model('M_ket_perangkat'); //load model
		    $this->M_ket_perangkat->hapus_ket($id_ket); //ngacir ke fungsi delTransaksi
		    $this->session->set_flashdata('success', 'Data Administrasi Wilayah Berhasil dihapus');
		    redirect('admin/ket_perangkat'); //redirect
		}	

		public function tambah(){
		$this->load->view('admin/ket_perangkat');
		}

		public function tambah_aksi(){

			$id_ket = $this->input->post('id_ket');
			$keterangan = $this->input->post('keterangan');

			$data = array(
				'id_ket' => $id_ket,
				'keterangan' => $keterangan,
				
			);
			$this->M_ket_perangkat->input_data($data,'tb_ket_perangkat');
			redirect('admin/ket_perangkat');
		}

		public function edit_ket($id_ket)
			{
				$where = array('id_ket' => $id_ket);
				$data = [
					'active_controller' => 'ket_perangkat',
					'active_function' => 'edit',
					'sidebar' => 'sidebar_admin',
				];

				$data['tb_ket_perangkat'] = $this->M_ket_perangkat->edit_ket($where, 'tb_ket_perangkat')->result();

				$this->load->view('adminlte3/global/home', $data);
			}	

			public function update_ket(){
				$id_ket = $this->input->post('id_ket');
				$keterangan = $this->input->post('keterangan');

				$data = array(
					'keterangan' => $keterangan,
				);

				$where = array(
					'id_ket' => $id_ket
				);

				$this->M_ket_perangkat->update_ket($where,$data,'tb_ket_perangkat');
				redirect('admin/ket_perangkat');
			}

	}
