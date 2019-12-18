<?php 

class Pengambilan_model extends CI_Model
{
	function input_data()
	{
		$data = [
			"id_pengambilan" => $this->input->post(),
			"no_laporan" => $this->input->post('no_laporan', true),
			"nama_pengambil" => $this->input->post('nama_pengambil', true),
			"no_hp" => $this->input->post('no_hp', true),
			"foto_pengambil" => $this->input->post('foto_pengambil', true),
			"tgl_pengambilan" => $this->input->post('tgl_pengambilan', true)
		];
		
		$this->db->insert('pengambilan_data', $data);
	}
}
