<?php 
 
 
class Pengambilan extends CI_Controller{
 
	function __construct(){
		
	}
 
	function index(){

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
            
		redirect('pengambilan/form_pengambilan');
	}
    }
}