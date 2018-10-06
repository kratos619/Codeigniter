<?php 
class Users extends CI_Controller
{
    public function show($id)
    {
        if($id == null){
            return 0;
        }
        $data['result'] = $this->user_model->get_users($id);
        //$data['welcome'] = "welcome to my page";
        $this->load->view('user_view',$data);
    }

    public function insert()
    {
        $this->user_model->create_user([
            'username' => 'sdsds',
            'password' => '1212'
        ]);
    }
    public function update()
    {
        $id = 3;
        $this->user_model->update_user([
            'username' => 'wwww',
            'password' => '1111'
        ],$id);
    }

    public function delete()
    {
        $id = 3;
        $this->user_model->delete_user($id);
    }
    
}
