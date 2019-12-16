<?php 
 
 
class Pengambilan extends CI_Controller{
 
	function __construct(){
        	parent::__construct();
			$this->load->model('pengambilan_model');
			$this->load->library('form_validation');
	}
 
	function index(){

		$this->$this->form_validation->set_rules('no_laporan', 'No Laporan', 'required');
		$this->$this->form_validation->set_rules('nama_pengambil', 'Nama Pengambil', 'required');
		$this->$this->form_validation->set_rules('no_hp', 'No Handphone', 'required');
		$this->$this->form_validation->set_rules('foto_pengambil', 'Foto Pengambil', 'required');
		$this->$this->form_validation->set_rules('tgl_pengambilan', 'Tanggal Pengambilan', 'required');

		if( $this->form_validation->run() == FALSE){
			$this->load->view('templates/sb');
			$this->load->view('pengambilan/index');
		} else {
			$this->Pengambilan_model->input_data();
			redirect('home');
		}
	}
    
    function add_action(){
			
	}
}
