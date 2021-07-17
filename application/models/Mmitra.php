<?php 

class Mmitra extends CI_Model{
    
    public function getData()
    {
        //buat query
        $query = $this->db->get_where('mitra');
        return $query;
    }

    public function detail($id){
        $query = $this->db->get_where('mitra', ['id' => $id]);
        return $query->row();
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
       
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('mitra');
    }

}

?>