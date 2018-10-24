<?php 

class Users extends CI_Controller{
    public function register(){
        $data['title']  = "Register User";
            $this->form_validation->set_rules('name','Your Name','required');
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('username','Username','required');
    $this->form_validation->set_rules('password','Password','required');
    $this->form_validation->set_rules('matchpassword','Confirm Password','matches[password]');
        if($this->form_validation->run() === false){
            
            $this->load->view('layouts/header');
            $this->load->view('users/register',$data);
            $this->load->view('layouts/footer');

        }else{
             die('continue');
        }
    }
}