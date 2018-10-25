<?php 

class Users extends CI_Controller{
    public function register(){
        $data['title']  = "Register User";
            $this->form_validation->set_rules('name','Your Name','required');
    $this->form_validation->set_rules('email','Email','required|callback_check_email_exists');
    $this->form_validation->set_rules('username','Username','required|callback_check_username_exists');
    $this->form_validation->set_rules('password','Password','required');
    $this->form_validation->set_rules('matchpassword','Confirm Password','matches[password]');
        if($this->form_validation->run() === false){
            
            $this->load->view('layouts/header');
            $this->load->view('users/register',$data);
            $this->load->view('layouts/footer');

        }else{
             // encrypt passwod
             $password = $this->input->post('matchpassword');
             $options = [
                'cost' => 11
                ];
              $hash =  password_hash($password, PASSWORD_BCRYPT, $options);

              $this->users_model->register_new_user($hash);
                $this->session->set_flashdata(
                    'user_registerd' ,
                    'You are Registered and can login'
                );
              redirect('posts');
        }
    }

    //check if username exists
    public function check_username_exists($username)
    {
        $this->form_validation->set_message(
        'check_username_exists',
        'that Username is already Taken Please Select Other One'
        );

        if($this->users_model->check_username_exists($username)){
            return true;
        }else{
            return false;
        }
    }

    //check if email is exists
    public function check_email_exists($email)
    {
        $this->form_validation->set_message(
            'check_email_exists',
            'Email Is alredy Registered'
        );

        if($this->users_model->check_email_exists($email)){
            return true;
        }else{
            return false;
        }
    }

    //login 
    public function login()
    {
        $data['title']  = "Login Users";
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run() === false){
            $this->load->view('layouts/header');
            $this->load->view('users/login',$data);
            $this->load->view('layouts/footer');

        }else{
            
            //$username = $this->input->post('username');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user_id = $this->users_model->login_user($username,$password);
            if($user_id){
               die('success'); 
                //redirect('posts');
            }else{
                
            $this->load->library('session');
           $this->session->set_flashdata('login_failed', 'login is required');
              $this->session->flashdata('login_failed');
              //redirect('users/login');
            }
        
        }
    }
}