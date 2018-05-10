<?php

class poe_model extends CI_MODEL{
	public function getPOEDetails($poeID){
		$query = $this->db->get_where('poe',array("id"=>$poeID));
		$portofentry = new portofentry();
		foreach ($query->result_array() as $row){
			$portofentry->setId($row['id']);
			$portofentry->setLocationAddress($row['location_address']);
			$portofentry->setMailingAddress($row['mailing_address']);
			$portofentry->setPhone($row['phone_number']);
			$portofentry->setFax($row['fax_number']);
			$portofentry->setEmail($row['email_id']);
			$portofentry->setOperatingHours($row['operating_hours']);
		

		}
		return $portofentry;

	}
}

?>