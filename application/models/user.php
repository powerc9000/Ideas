<?
class User extends CI_Model{
	public function email_pass_match($email,$pass){
		$this->db->where("email",$email);
		$this->db->where("password",$pass);
		$count = $this->db->count_all_results("users");
		if($count>0){
			return True;
		}
		else{
			return False;
		}
	}
	public function get_id_by_email($email){
		$this->db->where("email",$email);
		$query = $this->db->get("users");
		$result = $query->result();
		return $result[0]->id;

	}
	public function get_name_by_id($id){
		$this->db->where("id",$id);
		$query = $this->db->get("users");
		$result = $query->result();
		return $result[0]->name;
	}

}