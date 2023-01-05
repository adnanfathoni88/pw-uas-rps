<?php
class ModelRpsSampul extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_data()
    {
        $query = "SELECT * FROM rps_sampul JOIN dosen ON rps_sampul.id_dosen = dosen.id";
        return $this->db->query($query)->result_array();
    }
    public function save($no_dokumen, $tgl_penyusunan, $tgl_berlaku, $id_matkul, $id_dosen)
    {
        $data = array(
            'no_dokumen' => $no_dokumen,
            'tgl_penyusunan' => $tgl_penyusunan,
            'tgl_berlaku' => $tgl_berlaku,
            'id_matkul' => $id_matkul,
            'id_dosen' => $id_dosen,
        );
        $this->db->insert('rps_sampul', $data);
    }
}
