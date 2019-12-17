<?php 
 
 
class Pengambilan extends CI_Controller{
 
	function __construct(){
        	parent::__construct();
			$this->load->model('pengambilan_model');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Lost & Found - Pengambilan';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('pengambilan/index');
	}
}
