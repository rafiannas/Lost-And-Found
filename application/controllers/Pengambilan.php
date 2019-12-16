<?php 
 
 
class Pengambilan extends CI_Controller{
 
	function __construct(){
        	parent::__construct();
			$this->load->model('pengambilan_model');
	}
 
	function index(){
		$this->load->view('templates/sb');
		$this->load->view('pengambilan/index');
	}
}
