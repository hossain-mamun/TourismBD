<?php
if (!defined('BASEPATH')) exit("No direct script access allowed");

class Tourism_con extends CI_Controller
{
	
	public function index(){
	        $config['base_url'] = site_url('tourism_con/index');  
	        $config['total_rows'] = $this->db->get('tourism_contents')->num_rows();
	        $config['uri_segment'] = 3;
		$config['per_page'] = 4; 
		$config['full_tag_open'] = "<ul class='pagination pagination-lg'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = "<li>";
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		$data['place_contents']=$this->tourism_model->homepage($config);
		$data['homepage']='Home';
		$data['home1']='home1';
		$data['carousel']='carousel';
		$this->load->view('home/homepage',$data);
	}
			

        public function sitemap(){
	       $data['title']='Sitemap';
	       $data['sitemap']='sitemap';
	       $this->load->view('home/homepage',$data);
	}

        public function full_place(){
		$place_id = $_GET['place_id'];
		$data['result']=$this->tourism_model->get_full_place($place_id);
		$this->tourism_model->place_views($place_id);
	        $this->load->view('full_place',$data);
	}
    public function contact(){
		$data['contact']='Contact Us';
		$data['contact1']='contact1';
		$this->load->view('home/homepage',$data);
	}
	public function contact_validation(){

	         $this->form_validation->set_rules('name', 'Name', 'required');
	         $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	         $this->form_validation->set_rules('message', 'Message', 'required');
	         if ($this->form_validation->run() == FALSE)
	         { 
		 $data['contact']='Contact Us';
		 $data['contact1']='contact1';
		 $this->load->view('home/homepage',$data);
	         }
	    else{
	    	$result=$this->tourism_model->mail_send();
   
            if ($result) {
            $data['contact']='Contact Us';
		    $data['contact1']='contact1';
		    $data['success']='Your message has been sent';
		    $this->load->view('home/homepage',$data);
            }
            else{

			$data['error']='Error has been occured please resend the message';
		    $this->load->view('home/homepage',$data);

		}
            }

	}

	 public function search(){
	 	$search_word =  $_GET['search'];
	 	$data['result']=$this->tourism_model->search($search_word);
	 	$data['search_title']='Search Results';
	 	$this->load->view('full_place',$data);

	 }
	 public function login(){
        
	 	$data['login_title']='Account Login';
	 	$data['login']='login';
	 	$this->load->view('home/homepage',$data);
	 }

	 public function create_account(){
	 	$data['signup_title']='Create account';
	 	$data['signup']='signup';
	 	$this->load->view('home/homepage',$data);
	 }

	 public function signup_validation(){
	 	  $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[signup.email]');
	 	  $this->form_validation->set_rules('password','Password','required|trim');
	 	  $this->form_validation->set_rules('cpassword','Confirm password','required|trim|matches[password]');
		  $this->form_validation->set_message('is_unique', 'The given email address already exists.');
		  if ($this->form_validation->run()==FALSE) {
		   $data['signup_title']='Registration failed';
	 	   $data['signup']='signup';
	 	   $this->load->view('home/homepage',$data);
		  }

		  else{
                  $result=$this->tourism_model->signup();
                  if ($result) {
                  	$data['signup_title']='Registration Successfull';
                  	$data['signup']='signup';
                  	$data['success']='Your registration has been successfull!';
                  	$this->load->view('home/homepage',$data);
                  }
                  else{
                  	$data['signup_title']='Registration failed';
                  	$data['error']='Error has been occured please registration again';
                  	$this->load->view('home/homepage',$data);
                  }

		  }
	 }
	 public function login_validation(){
	 	$this->form_validation->set_rules('email','Email','required|trim');
	 	$this->form_validation->set_rules('password','Password','required|trim');

        if ($this->form_validation->run()==FALSE) {
		   $data['login_title']='login failed';
	 	   $data['login']='login';
	 	   $this->load->view('home/homepage',$data);
		  }
		  else{

		  	$result=$this->tourism_model->login_check();
		  	if($result){
		     redirect('tourism_con/forum');
			}
			else{
				$data['login_title']='login failed';
	 	        $data['login']='login';
	 	        $data['error']='Username or password is incorrect!';
	 	        $this->load->view('home/homepage',$data);
				
			}
		  }
	 }
	 public function signout(){
		$this->session->unset_userdata('current_user_id');
		$this->session->unset_userdata('current_user_name');
		$this->session->sess_destroy();
		redirect('tourism_con/?logout=success');
	}
	public function forum(){
		$config['base_url'] = site_url('tourism_con/forum');  
		$config['total_rows'] = $this->db->get('forum_posts')->num_rows();
		$config['uri_segment'] = 3;
		$config['per_page'] = 5; 
		$config['full_tag_open'] = "<ul class='pagination pagination-lg'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = "<li>";
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		//$data['forum_contents']=$this->tourism_model->forum_pagination($config);
		$data['forum_title']='Forum Home';
		$data['forumPosts']='forumPosts';
		$data['forum_details']= $this->tourism_model->get_forum_post($config);
		$this->load->view('Forum/forum_home',$data);
	}
	public function full_post_details(){
		$post_id = $_GET['post_id'];
		$data['full_post_results']=$this->tourism_model->get_full_post($post_id);
		$data['all_comments']=$this->tourism_model->get_comments($post_id);
		$this->tourism_model->post_views($post_id);
		$data['full_post_details']='full_post_details';
		$data['full_post_title']='Full Post';
        $this->load->view('Forum/forum_home',$data);
       }
        public function comment_insert(){
	 	$post_id = $_GET['post_id'];
	 	$this->tourism_model->comment_insert($post_id);
	 	$data['all_comments']=$this->tourism_model->get_comments($post_id);
	 	$data['full_post_results']=$this->tourism_model->get_full_post($post_id);
		$data['full_post_details']='full_post_details';
		$data['full_post_title']='Full Post';
        $this->load->view('Forum/forum_home',$data);

	 }
	
	public function forumSignout(){
		$this->session->unset_userdata('current_user_id');
		$this->session->unset_userdata('current_user_name');
		$this->session->sess_destroy();
		redirect('tourism_con/forum?logout=success');
	}

	public function startNewTopic(){
        $data['newTopic_title']='Start New Topic';
		$data['startNewTopic']='startNewTopic';
		$data['place_name']=$this->tourism_model->place_name_for_forum();
		$this->load->view('Forum/forum_home',$data);
	}
	public function forum_post_validation(){
		$this->form_validation->set_rules('topic_title','Topic Title','required');
		$this->form_validation->set_rules('post','Description','required');

        if ($this->form_validation->run()==FALSE) {
		   $data['newTopic_title']='Start New Topic';
	 	   $data['startNewTopic']='startNewTopic';
	 	   $this->load->view('Forum/forum_home',$data);
		  }

		  else{
            $result=$this->tourism_model->forum_post();
            if ($result) {
            	$data['forum_details']= $this->tourism_model->get_forum_post($forum_post);
            	$data['forum_title']='Forum Home';
		        $data['forumPosts']='forumPosts';
		        redirect('tourism_con/forum');
            }
            else{
           $data['newTopic_title']='Start New Topic';
	 	   $data['startNewTopic']='startNewTopic';
	 	   $data['error']='error has been occured! please rewrite the post';
	 	   $this->load->view('Forum/forum_home',$data);

            }
		  }

	}

}
?>
	

	



	 	
	 	
	 	
