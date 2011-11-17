<?
class Login extends CI_Controller{
	public function index(){
		if($this->session->userdata("logged_in")){
			redirect(site_url());
			return;
		}
		$this->load->view("login/login");
	}
	public function auth(){
		$email = $this->input->post("email");
		$pass = $this->input->post("password");
		if($this->user->email_pass_match($email,$pass)){
			$data["logged_in"] = True;
			$data["id"] = $this->user->get_id_by_email($email);
			$data["name"] = $this->user->get_name_by_id($data["id"]);
			$this->session->set_userdata($data);
			redirect("welcome");
		}
		else{
			$this->session->set_flashdata("message","Password or Email is not recognized");
			redirect("login");
		}
	}
	public function logout(){
		$this->session->sess_destroy();
	}
}