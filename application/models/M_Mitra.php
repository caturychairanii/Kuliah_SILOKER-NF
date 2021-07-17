<?php
class M_Mitra extends CI_Model
{
    public function getAllMitra()
    {
        $this->db->select('m.*,bu.nama as bidang_usaha, su.nama as sektor_usaha');
        $this->db->from('mitra m');
        $this->db->join('bidang_usaha bu', 'bu.id = m.bidang_usaha_id', 'left');
        $this->db->join('sektor_usaha su', 'su.id = m.sektor_usaha_id', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    public function insertMitra($data)
    {
        $this->db->insert('mitra', $data);
    }

    public function getBidangUsaha()
    {
        $query = $this->db->query("SELECT * FROM `bidang_usaha`");
        return $query->result();
    }

    public function getKategori()
    {
        $query = $this->db->query("SELECT * FROM `keahlian`");
        return $query->result();
    }
}