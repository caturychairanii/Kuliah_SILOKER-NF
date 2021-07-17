<?php 

class Muser extends CI_Model{
    
    public function getData()
    {
        //buat query
        $query = $this->db->get_where('user');
        return $query;
    }

    public function detail($id){
        $query = $this->db->get_where('user', ['id' => $id]);
        return $query->row();
    }

    public function store($username, $password, $email, $created_at){
        $data = array(
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'created_at' => $created_at
        );

        $query = $this->db->insert('user', $data);
    }

    public function update($id, $username, $email){
        $this->db->where('id', $id);
        $this->db->update('user', ["username" => $username, "email" => $email]);
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

}

?>