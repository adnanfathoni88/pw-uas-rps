<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelDosen', 'm_dosen');
    }
    public function index()
    {
        $data['dosen'] = $this->m_dosen->get_data();
        $this->load->view('view_user', $data);
    }
    public function create()
    {
        if (isset($_POST['submit'])) {
            $nik = $this->input->post('nik_dosen');
            $nama = $this->input->post('nama_dosen');
            $this->m_dosen->Tambah($nik, $nama);
            redirect('dosen');
        } else {
            $this->load->view('form/add_dosen');
        }
    }
    public function edit($dosen_id)
    {
        $result = $this->m_dosen->get_dosen_id($dosen_id);
        $data = array('get_dosen_id' => $result);
        $this->load->view('form/update_dosen', $data);
        var_dump($result);
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nik_dosen = $this->input->post('nik_dosen');
        $nama_dosen = $this->input->post('nama_dosen');
        $data = array(
            'nik_dosen' => $nik_dosen,
            'nama_dosen' => $nama_dosen
        );

        $this->m_dosen->update($id, $data);
        redirect('dosen');
    }
    public function delete($id)
    {
        $this->m_dosen->delete($id);
        redirect('dosen');
    }
}
