<?php 
class Home extends CI_Controller
{
    public function show()
    {
        $this->load->model('user_model');
       $result = $this->user_model->get_users();
    }
}
