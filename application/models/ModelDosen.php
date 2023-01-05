<?php
class ModelDosen extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_dosen_id($dosen_id)
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->where('id', $dosen_id);
        $query = $this->db->get();
        return $query->row();
    }
    public function get_data()
    {
        $query = "SELECT * FROM dosen";
        return $this->db->query($query)->result_array();
    }
    public function Tambah($nik, $nama)
    {
        $data = array(
            'nik_dosen' => $nik,
            'nama_dosen' => $nama
        );
        $this->db->insert('dosen', $data);
    }
    public function update($dosen_id, $data)
    {
        $this->db->where('id', $dosen_id);
        $this->db->update('dosen', $data);
    }
    public function delete($dosen_id)
    {
        $this->db->where('id', $dosen_id);
        $this->db->delete('dosen', array('id' => $dosen_id));
    }
}
