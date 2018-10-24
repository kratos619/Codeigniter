<?php 

class Users_model extends CI_Model{
    
    public function __construct(){
        $this->load->database();
    }
    public function register_new_user($password){
        $data = array(
            'name' => $this->input->post('name'),
              'email' => $this->input->post('email'),
              'username' => $this->input->post('username'),  
              'password' => $password        
        );

        return $this->db->insert('register_user',$data); 
    }
}