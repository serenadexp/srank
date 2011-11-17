<?php
class Blog extends CI_Controller {

public function post($id)
{
    $data['query'] = $this->blog_model->get_post($id);
    $data['comments'] = $this->blog_model->get_post_comment($id);
    $data['post_id'] = $id;
    $data['total_comments'] = $this->blog_model->total_comments($id);
 
    $this->load->helper('form');
    $this->load->library(array('form_validation','session'));
 
    //set validation rules
    $this->form_validation->set_rules('commentor', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('comment', 'Comment', 'required');
 
    if($this->blog_model->get_post($id))
    {
        foreach($this->blog_model->get_post($id) as $row)
        {
            //set page title
            $data['title'] = $row->entry_name;
        }
 
        if ($this->form_validation->run() == FALSE)
        {
            //if not valid
            $this->load->view('blog/post',$data);
        }
        else
        {
            //if valid
            $name = $this->input->post('commentor');
            $email = strtolower($this->input->post('email'));
            $comment = $this->input->post('comment');
            $post_id = $this->input->post('post_id');
 
            $this->blog_model->add_new_comment($post_id,$name,$email,$comment);
            $this->session->set_flashdata('message', '1 new comment added!');
            redirect('post/'.$id);
        }
    }
    else
        show_404();
	}
}
?>