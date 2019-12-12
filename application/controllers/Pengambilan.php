<?php 
 
 
class Pengambilan extends CI_Controller{
 
	function __construct(){
        	parent::__construct();
        	$this->load->model('pengambilan_model');
	}
 
	function index(){
        	$this ->add_view();
	}
 
	function add_view(){
		$this->load->view('pengambilan/form_pengambilan');
	}
    
    	function add_action(){
        	$no_laporan = $this->input->post('laporan');
		$nama_pengambil = $this->input->post('nama');
        	$no_hp = $this->input->post('hp');
        	$foto_pengambilan = $this->input->post('foto');
        	$tgl_pengambilan = $this->input->post('tanggal');
 
		$data = array(
			'laporan' => $no_laporan,
			'nama' => $nama_pengambil,
            		'hp' => $no_hp,
            		'foto'=> $foto_pengambilan,
            		'tanggal' => $tgl_pengambilan
            	);
        
        	$this->pengambilan_model->input_data($data,'pengambilan');
		redirect('pengambilan/form_pengambilan');
	}
}
