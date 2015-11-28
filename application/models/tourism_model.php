<?php
if (!defined('BASEPATH')) exit("No direct script access allowed");
class Tourism_model extends CI_Model{

	public function mail_send(){
	$attr=array(
	'name'=>$this->input->post('name'),
	'email'=>$this->input->post('email'),
	'message'=>$this->input->post('message'),
     );
	$insert=$this->db->insert('contact',$attr);
	if ($insert) {
		return true;
	}
	else{
		return false;
	}
	}
	public function homepage($config){
	$this->pagination->initialize($config);
	$query = $this->db->get('tourism_contents',$config['per_page'],$this->uri->segment(3));  
	return $query->result();

	}
	public function get_place_contents(){
	$this->db->select("*");
	$this->db->from('tourism_contents');
	$query=$this->db->get();
	$results=$query->result();
	return $results;
	}
	public function place_views($id){
	$this->db->where('place_id', $id);
    $this->db->set('place_views', 'place_views+1', FALSE);
    $this->db->update('tourism_contents');

	}
public function get_full_place($id){
	$this->db->select("*");
    $this->db->from('tourism_contents');
    $this->db->join('related_place', 'tourism_contents.place_id= related_place.place_id','INNER');
    $this->db->join('related_place_title', 'related_place.related_place_id= related_place_title.related_place_id','INNER');
    $this->db->where('tourism_contents.place_id',$id);
    $query=$this->db->get();
 	$results=$query->result();
	 return $results;
}
public function search($search_words){
    $this->db->like('place_title',$search_words);
	$this->db->or_like('related_place_title.related_place_title1',$search_words);
	$this->db->or_like('related_place_title.related_place_title2',$search_words);
	$this->db->or_like('related_place_title.related_place_title3',$search_words);
	$this->db->or_like('related_place_title.related_place_title4',$search_words);
	$this->db->select("*");
    $this->db->from('tourism_contents');
    $this->db->join('related_place', 'tourism_contents.place_id= related_place.place_id','INNER');
    $this->db->join('related_place_title', 'related_place.related_place_id= related_place_title.related_place_id','INNER');
	$query=$this->db->get();
	return $query->result();
}

public function signup(){
    $data = array(
			'full_name' => $this->input->post('fullname'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			);
    $query = $this->db->insert('signup',$data);
	
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
 
public function login_check(){
    $useremail=$this->input->post('email');
    $password=md5($this->input->post('password'));
    $attr=array(
    'email'=>$useremail,
    'password'=>$password
    	);
	$result=$this->db->get_where('signup',$attr);
	
	if($result->num_rows()==1){
    $attr=array(
   
   'current_user_id' => $result->row(0)->signup_id,
   'current_user_name' =>$result->row(0)->full_name,
   'is_user_logged_in' =>1,

     );
    //session set
    $this->session->set_userdata($attr);
    return TRUE;
	}
	else{
		return FALSE;
	}
		
} 
   public function is_user_logged_in(){
   return $this->session->userdata('current_user_id') !=FALSE;
	}

   public function place_name_for_forum(){
   	$this->db->select("*");
    $this->db->from('tourism_contents');
    $this->db->join('related_place', 'tourism_contents.place_id= related_place.place_id','INNER');
    $this->db->join('related_place_title', 'related_place.related_place_id= related_place_title.related_place_id','INNER');
    $query=$this->db->get();
 	$results=$query->result();
	return $results;
   	}

   	public function forum_post(){
   		  $data = array(
			'topic_title' => $this->input->post('topic_title'),
			'place_title' => $this->input->post('place_select'),
			'sub_place_title' => $this->input->post('sub_place_select'),
			'description' => $this->input->post('post'),
			'user_name'   =>$this->session->userdata('current_user_name')
			);
   		  $query = $this->db->insert('forum_posts',$data);
	      if($query)
	    {
		   return true;
	    }
	     else
	     {
		  return false;
	     }
   	}
   	 public function get_forum_post($config){
   	 	$this->pagination->initialize($config);
   	 	$this->db->order_by("post_id", "desc");
	    $query = $this->db->get('forum_posts',$config['per_page'],$this->uri->segment(3));  
	    return $query->result();
   	 	

   	 }

   	 public function get_full_post($post_id){
       $this->db->select("*");
       $this->db->from('forum_posts');
       $this->db->where('post_id', $post_id);
       $query=$this->db->get();
 	   $full_post_results=$query->result();
	   return $full_post_results;
   	 }
   	 public function get_comments($post_id){
   	   $this->db->select("*");
       $this->db->from('comment');
       $this->db->where('post_id', $post_id);
       $this->db->order_by("comment_id", "desc");
       $query=$this->db->get();
 	   $get_comment_results=$query->result();
	   return $get_comment_results;
   	 }
   	 public function post_views($post_id){
     $this->db->where('post_id', $post_id);
     $this->db->set('post_views', 'post_views+1', FALSE);
     $this->db->update('forum_posts');
   	 }
   	 public function comment_insert($post_id){
   	 	$attr=array(
          'comment'=>$this->input->post('comment'),
          'post_id'=>$post_id,
          'comment_post_by'=>$this->session->userdata('current_user_name')

    	);
    	$query = $this->db->insert('comment',$attr);
	      if($query)
	    {
		   return true;
	    }
	     else
	     {
		  return false;
	     }

   	 }
   	 

}
?>
	

	
	
				


	        
