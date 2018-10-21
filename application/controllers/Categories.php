<?php 

class Categories extends CI_Controller {
    
    
    public function create()
    {
        $data['title'] = 'Categories';
         $data['categories'] = $this->categories_model->get_categories();
        $this->form_validation->set_rules('cat_name','Categorey' ,'required');

        if($this->form_validation->run() === false){
                $this->load->view('layouts/header');
                $this->load->view('categories/create',$data);
                $this->load->view('layouts/footer');
        }else{
        $this->categories_model->create_categories();
        redirect('categories/create');
        
        }
        
    }

    public function delete($id)
    {
        $this->categories_model->delete_category($id);
        redirect('categories/create');
    }

}