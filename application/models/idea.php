<?
class Idea extends CI_Model{
	public function get_all_ideas(){
		return $this->db->get("ideas")->result();
	}
	public function get_id_by_id($id){
		$this->db->where("id",$id);
		$result = $this->db->get("ideas")->result();
		return $result[0];
	}
	public function new_idea($title,$idea,$id){
		$this->db->insert("ideas",array("title"=>$title,"idea"=>$idea,"user_id"=>$id));
		return $this->db->insert_id();
	}
	public function new_comment($comment,$idea_id,$user_id){
		$this->db->insert("comments",array("comment"=>$comment,"idea_id"=>$idea_id,"user_id"=>$user_id));
	}
	public function get_comments_for_idea($id){
		$this->db->where("idea_id",$id);
		return $this->db->get("comments")->result()
	}
}