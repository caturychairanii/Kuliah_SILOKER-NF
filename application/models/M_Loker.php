<?php
class M_Loker extends CI_Model
{
    public function getAllLoker()
    {
        $this->db->select('l.id,l.deskripsi_pekerjaan,l.tanggal_akhir,l.email,m.nama');
        $this->db->from('lowongan l');
        $this->db->join('mitra m', 'm.id = l.mitra_id', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    public function getLokerID($email)
    {
        $this->db->select('l.id,l');
        $this->db->from('lowongan l');
        $this->db->where('email = ', $email);
        $query = $this->db->get();
        return $query->result();
    }

    public function getDetail($id)
    {
        $query = $this->db->query("SELECT `lk`.`id`, `l`.`deskripsi_pekerjaan`, `l`.`tanggal_akhir`, `k`.`nama` as `keahlian`, `m`.`nama`, `m`.`alamat`, `m`.`email` FROM `lowongan_keahlian` `lk` LEFT JOIN `lowongan` `l` ON `l`.`id` = `lk`.`lowongan_id` LEFT JOIN `keahlian` `k` ON `k`.`id` = `lk`.`keahlian_id` LEFT JOIN `mitra` `m` ON `m`.`id` = `l`.`mitra_id`")->result();
        return $query;
    }

    public function insertLoker($data)
    {
        $this->db->insert('lowongan', $data);
    }

    public function insertLokerKeahlian($data)
    {
        $this->db->insert('lowongan_keahlian', $data);
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