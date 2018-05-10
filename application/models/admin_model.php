<?php

class Admin_model extends CI_MODEL{
	public function assignOfficetoPOE($userid,$poeID){
		$sql="insert into poe_assignment(user_id,poe_id) values('".$userid."','".$poeID."')";
		$this->db->query($sql);
		return $this->db->affected_rows() > 0;

	}
}

?>