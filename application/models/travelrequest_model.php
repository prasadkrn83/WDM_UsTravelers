<?php

class travelrequest_model extends CI_MODEL{
	public function createTravelRequest($data){
		$this->db->insert('traveldetails', $data);
		return $this->db->affected_rows() > 0;
	}
	public function getMyTravelHistory($id){
		$sql="select start_date as taveldate,  poe_name from traveldetails,poe 
		where traveldetails.poe_id=poe.id 
		and traveldetails.user_id=".$id;
		$query = $this->db->query($sql);
		$response= array();
		$count=1;
		foreach ($query->result_array() as $row){

			$response[]=["slno"=>$count,"taveldate"=>$row['taveldate'],"departing_country"=>$row['poe_name']];
			$count++;

		}
		return $response;
	}

	public function getMyTravelDetails($id,$travelstartdate,$travelenddate){
		$sql="select traveldetails.id, start_date as taveldate,  poe_name from traveldetails,poe 	where traveldetails.poe_id=poe.id and traveldetails.user_id='".$id."'         and traveldetails.start_date>='".$travelstartdate."'      and traveldetails.end_date<='".$travelenddate."'";
		$query = $this->db->query($sql);
		$response= array();
		$count=1;
		foreach ($query->result_array() as $row){

			$response[]=[$row['id']=>["slno"=>$count,"taveldate"=>$row['taveldate'],"departing_country"=>$row['poe_name']]];
			$count++;

		}
		return $response;
	}
}

?>