<?php 
class User_model extends CI_Model
{
    public function get_users($id)
    {
     $this->db->where('id',$id);   
        $query =  $this->db->get('user');
        return $query->result();
    }

    public function create_user($data)
    {
        # code...
        $this->db->insert('user',$data);
    }

    public function update_user($data,$id)
    {
        # code...
        $this->db->where(['id' => $id]);
        $this->db->update('user',$data);
    }

    public function delete_user($id)
    {
        # code...
        
        $this->db->where(['id' => $id]);
        $this->db->delete('user');
    }
    
}
