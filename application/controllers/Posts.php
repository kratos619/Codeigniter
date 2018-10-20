<?php 
class Posts extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Latest Posts';
        $this->load->view('layouts/header');
        $this->load->view('posts/index',$data);
        $this->load->view('layouts/footer');

    }
}
