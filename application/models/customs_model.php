<?php

class customs_model extends CI_MODEL{
	public function searchCustomOfficer($passport){
		$query = $this->db->get_where('user',array("passport"=>$passport,"user_type_id"=>'1'));
		$user=null;
		if ($query->num_rows() > 0)
		{
	  		$row = $query->row();
		   	$user= new user();
	   		$user->setId($row->id);
	   		$user->setUserId($row->user_id);
	   		$user->setFname($row->fname);
	   		$user->setMname($row->mname);
	   		$user->setLname($row->lname);
	   		$user->setEmailId($row->email_id);
	   		$user->setDob($row->date_of_birth);
	   		$user->setAddress1($row->address1);
	   		$user->setAddress2($row->address2);
	   		$user->setCityId($row->city_id);
	   		$user->setStateId($row->state_id);
	   		$user->setCountryId($row->country_id);
	   		$user->setZipcode($row->zipcode);
	   		$user->setVisatypeId($row->visatype_id);
	   		$user->setVisaNumber($row->visa_number);
	   		$user->setVisaExpDate($row->visa_expiry_date);
			$user->setUserAccountStatus($row->accountstatus);
	        $user->setPassport($row->passport);
	        $user->setIssuingCountry($row->issuing_country_id);
      		$user->setPExpDate($row->passport_expiry_date);

		}

		return $user;
	}

		public function searchUser($passport){
		$query = $this->db->get_where('user',array("passport"=>$passport));
		$user=null;
		if ($query->num_rows() > 0)
		{
	  		$row = $query->row();
		   	$user= new user();
	   		$user->setId($row->id);
	   		$user->setUserId($row->user_id);
	   		$user->setFname($row->fname);
	   		$user->setMname($row->mname);
	   		$user->setLname($row->lname);
	   		$user->setEmailId($row->email_id);
	   		$user->setDob($row->date_of_birth);
	   		$user->setAddress1($row->address1);
	   		$user->setAddress2($row->address2);
	   		$user->setCityId($row->city_id);
	   		$user->setStateId($row->state_id);
	   		$user->setCountryId($row->country_id);
	   		$user->setZipcode($row->zipcode);
	   		$user->setVisatypeId($row->visatype_id);
	   		$user->setVisaNumber($row->visa_number);
	   		$user->setVisaExpDate($row->visa_expiry_date);
			$user->setUserAccountStatus($row->accountstatus);
			$user->setPassport($row->passport);
	        $user->setIssuingCountry($row->issuing_country_id);
      		$user->setPExpDate($row->passport_expiry_date);

		}

		return $user;
	}

	public function searchTravelRequest($tstartdate,$tenddate,$entstate){


		$sql="select t.id,t.start_date,stat.status,c.name as port_of_entry from traveldetails t,customs_status_master stat,poe p,city c where t.poe_id=p.id and p.city_id=c.id and stat.id=t.customs_status and t.start_date>='".$tstartdate."' and t.end_date<='".$tenddate."' and t.customs_status='".$entstate."'";
				
		$query=$this->db->query($sql);


		$travelRequest= array();
		$count=1;
		foreach ($query->result_array() as $row){

			$travelRequest[]=[$row['id']=>array("slno"=>$count,"date"=>$row['start_date'],"poe"=>$row['port_of_entry'],"status"=>$row['status'])];
			$count++;

		}
		return $travelRequest;
	} 
	public function getTravelDetail($id){
			$sql="select traveldetails.id,traveldetails.start_date,traveldetails.end_date,
		    poe.poe_name,traveldetails.flight_number,traveldetails.arrival_time,c1.name departing_city,country.name departing_country,s1.name departing_state,		        traveldetails.address1,    traveldetails.address2,c2.name arrival_city,    s2.name arrival_state,    traveldetails.zipcode,    traveldetails.customs_status status,    traveldetails.customs_comments FROM traveldetails,country,city c1,state s1,city c2,state s2,customs_status_master,poe where traveldetails.departing_country=country.id and traveldetails.departing_city=c1.id and c1.state_id=s1.id and traveldetails.customs_status=customs_status_master.id and traveldetails.city_id=c2.id and traveldetails.state_id=s2.id and traveldetails.poe_id=poe.id and traveldetails.id='".$id."'";
			$query=$this->db->query($sql);
			$response=null;
			if ($query->num_rows() > 0)
			{
				$response = $query->row_array();
	  			
	  		}

	  		return $response;
	}

		public function updateTravelDetail($travelId,$status,$comments){

			$sql="update  traveldetails set customs_status='".$status."', customs_comments='".$comments
			."' where id='".$travelId."'";
			$query=$this->db->query($sql);
			return true;
		}

		public function getReports($travelstartdate,$travelenddate,$currstat,$depcountry,$poe){

			$sql="select count(*) as count , country.name as departing_country from traveldetails,country 
				  where start_date>='".$travelstartdate."'
				  and end_date<='".$travelenddate."'
				  and departing_country='".$depcountry."'
				  and poe_id='".$poe."'
				  and departing_country=country.id";

			$query=$this->db->query($sql);
			$response= array();
		$count=1;
		foreach ($query->result_array() as $row){

			$response[]=["slno"=>$count,"count"=>$row['count'],"departing_country"=>$row['departing_country']];
			$count++;

		}
		return $response;

		}  

		public function customcount(){
			$customcount= "Select count(*) as count from traveldetails where start_date = UTC_DATE()";
			$query=$this->db->query($customcount);
			$response=0;
			if ($query->num_rows() > 0)
			{
  				$row = $query->row();
				$response=$row->count;
			}
			return $response;
		}
		public function warningcount(){
			$warningcount= "Select count(*) as count from traveldetails where customs_status=4 ";
			$query=$this->db->query($warningcount);
			$response=0;
			if ($query->num_rows() > 0)
			{
  				$row = $query->row();
				$response=$row->count;
			}
			return $response;
		}
		public function reviewcount(){
			$reviewcount= "Select count(*) as count from traveldetails where customs_status=1";
			$query=$this->db->query($reviewcount);
			$response=0;
			if ($query->num_rows() > 0)
			{
  				$row = $query->row();
				$response=$row->count;
			}
			return $response;
		}
}
?>