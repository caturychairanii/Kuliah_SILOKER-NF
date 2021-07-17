<?php 

class MbidangUsaha extends CI_Model{
    
    public function getData()
    {
        //buat query
        $query = $this->db->get_where('bidang_usaha');
        return $query;
    }

    public function detail($id){
        $query = $this->db->get_where('bidang_usaha', ['id' => $id]);
        return $query->row();
    }

    public function store($nama){
        $data = array(
            'nama' => $nama,
        );

        $query = $this->db->insert('bidang_usaha', $data);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
       
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('bidang_usaha');
    }

}

?>