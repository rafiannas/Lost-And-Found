<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Penemuan_model extends CI_Model
{

    public $table = 'temuan';

    function __construct()
    {
        parent::__construct();
    }


    function getAllPenemuan()
    {
        return $this->db->get('temuan')->result_array();
    }

    function input_data($data)
    {
        $this->db->insert($this->table, $data);
    }
}
