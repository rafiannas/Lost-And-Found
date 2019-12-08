<?php

class Penemuan extends CI_Controller
{
    public function index()
    {
        $this->load->model('Penemuan_model');
        $data['temuan'] = $this->Penemuan_model->getAllPenemuan();
        $this->load->view('templates/sb',$data);
        $this->load->view('penemuan/index',$data);
        
    }
} 