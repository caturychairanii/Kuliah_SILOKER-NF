<?php 

class Mkeahlian extends CI_Model{
    
    public function getData()
    {
        //buat query
        $query = $this->db->get_where('keahlian');
        return $query;
    }

    public function detail($id){
        $query = $this->db->get_where('keahlian', ['id' => $id]);
        return $query->row();
    }

    public function store($nama){
        $data = array(
            'nama' => $nama,
        );

        $query = $this->db->insert('keahlian', $data);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
       
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('keahlian');
    }

}

?>