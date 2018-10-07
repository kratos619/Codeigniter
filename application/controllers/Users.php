<?php 
class Users extends CI_Controller
{
    // public function show($id)
    // {
    //     $data['result'] = $this->user_model->get_users($id);
    //     //$data['welcome'] = "welcome to my page";
    //     $this->load->view('user_view',$data);
    // }

    // public function insert()
    // {
    //     $this->user_model->create_user([
    //         'username' => 'sdsds',
    //         'password' => '1212'
    //     ]);
    // }
    // public function update()
    // {
    //     $id = 3;
    //     $this->user_model->update_user([
    //         'username' => 'wwww',
    //         'password' => '1111'
    //     ],$id);
    // }

    // public function delete()
    // {
    //     $id = 3;
    //     $this->user_model->delete_user($id);
    // }

    public function login()
    {

        $this->form_validation->set_rules('username', 'Username','trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password','trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password','trim|required|min_length[3]|match[password]');


        if($this->form_validation->run() == FALSE){
            $data = array(
                'errors' => validation_errors()
            );
            $this->session->set_flashdata($data);
            redirect('home');
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->user_model->login_user($username,$password);

            if($user_id){
                $user_data = array(
                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true
                );
                $this->session->set_userdata($user_data);
                redirect('home/index');
            }else{
                redirect('home/index');
            }
        }

    }
    
}
