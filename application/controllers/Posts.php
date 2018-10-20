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

    public function create()
    {
        $data['title'] = 'create Post';
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('body','Body','required');

        if($this->form_validation->run() === false){
            
        $this->load->view('layouts/header');
        $this->load->view('posts/create',$data);
        $this->load->view('layouts/footer');

        }else{
            $this->post_model->create_post();
           redirect('posts');
        }

    }

    public function delete($id)
    {
        $this->post_model->delete_post($id);
        redirect('posts');
    }
}
