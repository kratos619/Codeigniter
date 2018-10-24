<?php

class Comments extends CI_Controller{

public function create($id){
   // echo  $id;
    $slug = $this->input->post('selected_slug');
    $data['post'] = $this->post_model->get_post($slug);
    
    $this->form_validation->set_rules('name','Your Name','required');
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('commentbody','Comment','required');

    if($this->form_validation->run() === false){
                $this->load->view('layouts/header');
                $this->load->view('posts/view',$data);
                $this->load->view('layouts/footer');

    }else{

        $this->comments_model->create_comment($id);
        redirect('posts/'.$slug);
    }
    }

    

    
}