<?php 
class User_model extends CI_Model
{
    // public function get_users($id)
    // {
    //  $this->db->where('id',$id);   
    //     $query =  $this->db->get('user');
    //     return $query->result();
    // }

    // public function create_user($data)
    // {
    //     # code...
    //     $this->db->insert('user',$data);
    // }

    // public function update_user($data,$id)
    // {
    //     # code...
    //     $this->db->where(['id' => $id]);
    //     $this->db->update('user',$data);
    // }

    // public function delete_user($id)
    // {
    //     # code...
        
    //     $this->db->where(['id' => $id]);
    //     $this->db->delete('user');
    // }

    public function login_user($username,$password)
    {
        $this->db->where('username',$username);
        $this->db->where('username',$password);

        $result = $this->db->get('user');

        if($result->num_rows() == 1){
            return $result->row(0)->$id;
        }else{
            return false;
        }
    }
    
}
