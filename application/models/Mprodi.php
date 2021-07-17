<?php 

class Mprodi extends CI_Model{
    
    public function getData()
    {
        //buat query
        $query = $this->db->get_where('prodi');
        return $query;
    }

    public function detail($id){
        $query = $this->db->get_where('prodi', ['id' => $id]);
        return $query->row();
    }

    public function store($nama){
        $data = array(
            'nama' => $nama,
        );

        $query = $this->db->insert('prodi', $data);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
       
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('prodi');
    }

}

?>