<?php 
class Posts extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Latest Posts';

        $data['posts'] = $this->post_model->get_post();

      //  print_r($data['posts']);

        $this->load->view('layouts/header');
        $this->load->view('posts/index',$data);
        $this->load->view('layouts/footer');

    }

    public function view($slug = null){
        $data['post'] = $this->post_model->get_post($slug);

        if(empty($data['post'])){
            show_404();
        }
        $data['title'] = $data['post']['title'];
        $this->load->view('layouts/header');
        $this->load->view('posts/view',$data);
        $this->load->view('layouts/footer');
    }
}
