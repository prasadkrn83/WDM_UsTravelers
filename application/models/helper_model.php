<?php

class helper_model extends CI_MODEL{
	public function  getAllCountries(){
		$query = $this->db->get('country');
		$countryList= array("0"=>"--Select Country--");
		foreach ($query->result_array() as $row){
			$countryList+=[$row['id']=>$row['name']];
		}

		return $countryList;
	}

	public function  getAllStatus(){
		$query = $this->db->get('customs_status_master');
		$statusList= array("0"=>"--Select Status--");
		foreach ($query->result_array() as $row){
			$statusList+=[$row['id']=>$row['status']];
		}

		return $statusList;
	}

	public function  getAllStates($countryId){
		$query = $this->db->get_where('state',array("country_id"=>$countryId));
		var_dump($countryId);
		$stateList= array("<option value='0'>--Select State--</option>");
		foreach ($query->result_array() as $row){
			$stateList[]="<option value='".$row['id']."'>".$row['name']."</option>";
		}
		var_dump($stateList);
		return $stateList;
	}

	public function  getAllCities($stateId){
		$query = $this->db->get_where('city',array("state_id"=>$stateId));

		$cityList= array("<option value='0'>--Select City--</option>");
		foreach ($query->result_array() as $row){
			$cityList[]="<option value='".$row['id']."'>".$row['name']."</option>";
		}
		return $cityList;
	}

	public function  getAllUSStates(){
		$query = $this->db->get_where('state',array("country_id"=>"217"));

		$stateList= array("0"=>"--Select State--");
		foreach ($query->result_array() as $row){
			$stateList+=[$row['id']=>$row['name']];
		}
		return $stateList;
	}

	public function  getAllUSPOE($cityId){
		$query = $this->db->get_where('poe',array("city_id"=>$cityId));
		$cityList= array("<option value='0'>--Select City--</option>");
		foreach ($query->result_array() as $row){
			$cityList[]="<option value='".$row['id']."'>".$row['poe_name']."</option>";
		}
		return $cityList;
	}
	public function getPOEDetails($poeID){
		$query = $this->db->get_where('poe',array("id"=>$cityId));
		
	}

	public function  getVisaCategory(){
		$query = $this->db->get('visa_master');
		$visaList= array("0"=>"--Select Visa Category--");
		foreach ($query->result_array() as $row){
			$visaList+=[$row['id']=>$row['visatype']." ( ".$row['description']." )"];
		}

		return $visaList;
	}
}

?>