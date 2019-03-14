<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_home');
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
			'active_controller' => 'home',
			'active_function' => 'index',
			'sidebar' => 'sidebar_admin',
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
		
		$data['get_barat_count'] 	= $this->M_home->get_barat_count();
		$data['get_utara_count'] 	= $this->M_home->get_utara_count();
		$data['get_timur_count'] 	= $this->M_home->get_timur_count();
		$data['get_selatan_count'] 	= $this->M_home->get_selatan_count();
		$data['get_all_count'] 	= $this->M_home->get_all_count();
		$this->load->view('adminlte3/global/home', $data);

       
	}	
}
