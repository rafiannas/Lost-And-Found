<?php
class Penemuan_model extends CI_Model
{
    public function getAllPenemuan()
    {
        return $this->db->get('temuan')->result_array();
    }
}
