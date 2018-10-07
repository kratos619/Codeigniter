<?php 
class Home extends CI_Controller
{
    public function show()
    {

        $this->load->model('layouts/main');
       //$result = $this->user_model->get_users();
    }

    public function index()
    {
        # code...
        $data['main_view'] = "home_view";
        $this->load->view('layouts/main',$data);

    }
}
