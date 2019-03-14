<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_laporan extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_home');
		$this->load->model('M_input_laporan');
		$this->load->model('M_status');
		$this->load->model('M_ket_perangkat');
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
			'active_controller' => 'input_laporan',
			'active_function' => 'index2',
			'sidebar' => 'sidebar_admin'
		];

		 $this->load->library('googlemaps');
            $config=array();
            $config['center']="-6.895863, 109.662573";
            $config['zoom']=17;
            $config['map_height']="400px";

         $this->googlemaps->initialize($config);
            $marker=array();
            $marker['position']="-6.895863, 109.662573";
            
         $this->googlemaps->add_marker($marker);
            $data['map']=$this->googlemaps->create_map();	

		$data['dropdown'] = $this->M_input_laporan->tampil();
		$data['dropdown2'] = $this->M_status->tampil();
		$data['dropdown3'] = $this->M_ket_perangkat->tampil();
		$data['get_barat_count'] 	= $this->M_home->get_barat_count();
		$data['get_utara_count'] 	= $this->M_home->get_utara_count();
		$data['get_timur_count'] 	= $this->M_home->get_timur_count();
		$data['get_selatan_count'] 	= $this->M_home->get_selatan_count();

		$this->load->view('adminlte3/global/home', $data);
	}

		//input data
	public function tambah(){
		$this->load->view('surveyor/input_laporan');
	}

	public function tambah_aksi(){
		$config['upload_path']          = '../telecenter/uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000;
		$config['max_width']            = 2000;
		$config['max_height']           = 2000;
		$this->load->library('upload', $config);


		$id_telecenter = $this->input->post('id_telecenter');
		$id_kecamatan = $this->input->post('id_kecamatan');
		$nama_telecenter = $this->input->post('nama_telecenter');
		$alamat_telecenter = $this->input->post('alamat_telecenter');
		$nama_pengelola = $this->input->post('nama_pengelola');
		$alamat_pengelola = $this->input->post('alamat_pengelola');
		$pc_jumlah = $this->input->post('pc_jumlah');
		$pc_status = $this->input->post('pc_status');
		$printer_jumlah = $this->input->post('printer_jumlah');
		$jaringan_jumlah = $this->input->post('jaringan_jumlah');
		$jaringan_jenis = $this->input->post('jaringan_jenis');
		$jumlah_pengguna = $this->input->post('jumlah_pengguna');
		$posisi = $this->input->post('posisi');
		$lokasi = $this->input->post('lokasi');
		$ket_2 = $this->input->post('ket_2');
		$printer_status = $this->input->post('printer_status');
		$jaringan_status = $this->input->post('jaringan_status');
		$listrik_jumlah = $this->input->post('listrik_jumlah');
		$listrik_status = $this->input->post('listrik_status');
		$ket_1 = $this->input->post('ket_1');

		$data = array(
			'id_telecenter' => $id_telecenter,
			'id_kecamatan' => $id_kecamatan,
			'nama_telecenter' => $nama_telecenter,
			'nama_pengelola' => $nama_pengelola,
			'alamat_pengelola' => $alamat_pengelola,
			'pc_jumlah' => $pc_jumlah,
			'pc_status' => $pc_status,
			'alamat_telecenter' => $alamat_telecenter,
			'printer_jumlah' => $printer_jumlah,
			'jaringan_jumlah' => $jaringan_jumlah,
			'jaringan_jenis' => $jaringan_jenis,
			'jumlah_pengguna' => $jumlah_pengguna,
			'posisi' => $posisi,
			'lokasi' => $lokasi,
			'ket_2' => $ket_2,
			'printer_status' => $printer_status,
			'jaringan_status' => $jaringan_status,
			'listrik_jumlah' => $listrik_jumlah,
			'listrik_status' => $listrik_status,
			'ket_1' => $ket_1,

		);

		$this->M_input_laporan->input_data($data,'tb_telecenter');

		$id_telecenter = $this->db->query('SELECT id_telecenter FROM tb_telecenter ORDER BY id_telecenter DESC LIMIT 1');
		$id_telecenter = $id_telecenter->result()[0]->id_telecenter;
				//mengurutkan data terbesar/data terakhit
		$this->upload->do_upload('foto');
		$foto = $this->upload->data('file_name');
		$this->upload->do_upload('foto_printer');
		$foto_printer = $this->upload->data('file_name');
		$this->upload->do_upload('foto_jaringan');
		$foto_jaringan = $this->upload->data('file_name');
		
		$longitude = $this->input->post('longitude');
		$latitude = $this->input->post('latitude');
		$data_tb_tambahan = array(
			'id_telecenter' => $id_telecenter,
			'foto' => $foto,
			'foto_printer' => $foto_printer,
			'foto_jaringan' => $foto_jaringan,
			'latitude' => $latitude,
			'longitude' => $longitude,
		);

		$this->M_input_laporan->input_data($data_tb_tambahan,'tb_tambahan');
		redirect('surveyor/input_laporan');
	}

}
	//end input data



