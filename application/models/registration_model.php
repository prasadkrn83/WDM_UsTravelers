<?php

class registration_model extends CI_MODEL{
	public function resgisterUser($data){
		$this->db->insert('user', $data);
		return $this->db->affected_rows() > 0;
	}

	public function updateprofile($data){
		$this->db->where('user_id',$data['user_id']);
		$this->db->update('user', $data);
		return $this->db->affected_rows() > 0;
	}

	public function deleteUser($userid){
		$sql="update user set accountstatus='N' where id='".$userid."'";
		$query=$this->db->query($sql);
		return $this->db->affected_rows() > 0;
	}
}

?>