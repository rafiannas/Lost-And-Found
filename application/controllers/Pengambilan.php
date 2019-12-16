<?php 
 
 
class Pengambilan extends CI_Controller{
 
	function __construct(){
        	parent::__construct();
			$this->load->model('pengambilan_model');
			$this->load->library('form_validation');
	}
 
	function index(){
		$this->load->view('templates/sb');
		$this->load->view('pengambilan/index');
		$this->Pengambilan_model->input_data();
	}
    
    function add_action(){
			
	}
}
