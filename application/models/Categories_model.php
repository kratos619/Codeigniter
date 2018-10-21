<?php 

class Categories_model extends CI_Model
{
    public function __construct(){
        $this->load->database();
    }

    public function create_categories(){
        $data = array(
            'name' => $this->input->post('cat_name')
        );
        return $this->db->insert('categories',$data);
    }

    public function get_categories()
    {
         $this->db->order_by('id','DESC');
         $query = $this->db->get('categories');
          return $query->result_array();
    }

    public function delete_category($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('categories');
        return true;
    }

}
