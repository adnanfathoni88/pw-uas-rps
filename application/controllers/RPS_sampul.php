<?php
defined('BASEPATH') or exit('No direct script access allowed');
class RPS_sampul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelRpsSampul', 'm_rps_sampul');
        $this->load->model('ModelDosen', 'm_dosen');
    }
    public function index()
    {
        $data['sampul'] = $this->m_rps_sampul->get_data();

        $this->load->view('_partials/head');
        $this->load->view('_partials/container');
        $this->load->view('view_rps_sampul', $data);
        $this->load->view('_partials/endcontainer');
        $this->load->view('_partials/endhead');
    }
    public function create_get()
    {
        $data['dosen'] = $this->m_dosen->get_data();

        $this->load->view('_partials/head');
        $this->load->view('_partials/container');
        $this->load->view('form/add_rps_sampul', $data);
        $this->load->view('_partials/endcontainer');
        $this->load->view('_partials/endhead');
    }
    public function create_post()
    {
        $no_dokumen = $this->input->post('no_dokumen');
        $tgl_penyusunan = $this->input->post('tgl_penyusunan');
        $tgl_berlaku = $this->input->post('tgl_berlaku');
        $id_matkul = $this->input->post('id_matkul');
        $id_dosen = $this->input->post('cmb_dosen');
        $this->m_rps_sampul->save($no_dokumen, $tgl_penyusunan, $tgl_berlaku, $id_matkul, $id_dosen);
        redirect('rps_sampul');
    }
}
