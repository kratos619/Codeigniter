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
        $post_id = $data['post']['id'];
        $data['comments'] = $this->comments_model->get_comments($post_id);
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
        $data['categories'] = $this->post_model->get_categories();
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('body','Body','required');
        $this->form_validation->set_rules('categories_id','Category','required');

        if($this->form_validation->run() === false){
            
                $this->load->view('layouts/header');
                $this->load->view('posts/create',$data);
                $this->load->view('layouts/footer');

        }else{
            $config['upload_path'] = "./assets/images/posts";
            $config['allowed_types'] = 'gif|jpeg|jpg|png';
            $config['max_size'] = '2048';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';
            
            $this->load->library('upload',$config);
             if($this->upload->do_upload()){
                $data = array('upload_data' => $this->upload->data());
                $post_image = $_FILES['userfile']['name'] ;                   
             }   else{
                $errors =   array('error'=> $this->upload->display_errors());
                $post_image = 'noimage.jpg';
             }
             //$this->post_model->create_post($post_image);
            //$this->load->library('upload',$config);
            $this->post_model->create_post($post_image);
                     $this->load->library('session');    
            $this->session->set_flashdata(
                    'post_created' ,
                    'Post Created Successfully'
                );
          
            redirect('posts');
        }

    }

    public function delete($id)
    {
        $this->post_model->delete_post($id);
        redirect('posts');
    }
    public function edit($slug)
    {
        // $this->post_model->edit_post($id);
        // redirect('posts');
        $data['post'] = $this->post_model->get_post($slug);
$data['categories'] = $this->post_model->get_categories();
        if(empty($data['post'])){
            show_404();
        }
        $data['title'] = 'Edit Posts';
        $this->load->view('layouts/header');
        $this->load->view('posts/edit',$data);
        $this->load->view('layouts/footer');
    }

    public function update()
    {
        $this->post_model->update_post();
        redirect('posts');
    }
}
