<?php 

class Comments_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function create_comment($id){
      $data =  array(
            'post_id' => $id,
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'comment_body' => $this->input->post('commentbody')
        );
           return $this->db->insert('comments',$data);

    }


    public function get_comments($post_id){
         $query = $this->db->get_where('comments', array('post_id' => $post_id));
        return $query->result_array();
        
    }

}