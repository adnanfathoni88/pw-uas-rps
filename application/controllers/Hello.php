<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hello extends CI_Controller
{
    public function index()
    {
        $this->load->model('m_user');
        $data['mahasiswa'] =  $this->m_user->get_data();

        $this->load->view('view_user', $data);
    }
}
