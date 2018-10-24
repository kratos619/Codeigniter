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

    public function check_username_exists($username){
        $query = $this->db->get_where('register_user' ,array(
            'username' => $username
        ));

        if(empty($query->row_array())){
            return true;
        }else{
            return false;
        }
    }
    public function check_email_exists($email){
        $query = $this->db->get_where('register_user' ,array(
            'email' => $email
        ));

        if(empty($query->row_array())){
            return true;
        }else{
            return false;
        }
    }

}