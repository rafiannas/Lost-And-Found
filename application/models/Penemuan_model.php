<?php
class Penemuan_model extends CI_Model
{
    public function getAllPenemuan()
    {
        return $this->db->get('temuan')->result_array();
    }

    function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
