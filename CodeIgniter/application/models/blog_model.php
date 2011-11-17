<?php 

class Blog_model extends CI_Model {
function add_new_comment($post_id,$commentor,$email,$comment)
{
    $data = array(
        'entry_id'=>$post_id,
        'comment_name'=>$commentor,
        'comment_email'=>$email,
        'comment_body'=>$comment,
    );
    $this->db->insert('comment',$data);
}
 
function get_post($id)
{
    $this->db->where('entry_id',$id);
    $query = $this->db->get('entry');
    if($query->num_rows()!==0)
    {
        return $query->result();
    }
    else
        return FALSE;
}
 
function get_post_comment($post_id)
{
    $this->db->where('entry_id',$post_id);
    $query = $this->db->get('comment');
    return $query->result();
}
 
function total_comments($id)
{
    $this->db->like('entry_id', $id);
    $this->db->from('comment');
    return $this->db->count_all_results();
}
	
}

?>