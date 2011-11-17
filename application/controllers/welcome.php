<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if(!$this->session->userdata("logged_in")){
			redirect("login");
		}
		$data["ideas"]=$this->idea->get_all_ideas();
		$this->load->view("ideas/all_ideas", $data);
	}
	public function new_idea(){
		if($this->input->post("submitted")){
			$title = $this->input->post("title");
			$idea = $this->input->post("idea");
			$id = $this->session->userdata("id");
			$idea_id = $this->idea->new_idea($title, $idea, $id);
			$this->session->set_flashdata("message","Your Idea was added... here it is!");
			redirect(site_url("welcome/idea/$idea_id"));
		}
		else{
			$this->load->view("ideas/new");
		}
		
	}
	public function idea($id){
		$idea = $this->idea->get_id_by_id($id);
		$this->load->view("ideas/idea",array("idea"=>$idea));

	}
	public function new_comment($idea_id,$commenter_id){
		$comment = $this->input->post("comment");
		$this->idea->new_comment($comment,$idea_id,$commenter_id);
		redirect("welcome/idea/$idea_id");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */