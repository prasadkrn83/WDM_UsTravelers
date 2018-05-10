<?php

class login_model extends CI_MODEL{
	public function validateLogin($data){
	$this->db->from('user AS user')
          ->where('user.accountstatus', 'Y')
          ->where('user.user_id', $data['username'])
          ->where('user.password', $data['password']);
	$query = $this->db->get();
	$user=null;
	if ($query->num_rows() > 0)
	{
  		$row = $query->row();
	   	$user= new user();
   		$user->setId($row->id);
   		$user->setUserId($row->user_id);
   		$user->setPassword($row->password);
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
		  $user->setType($row->user_type_id);
      $user->setPassport($row->passport);
      $user->setVisaExpDate($row->visa_expiry_date);
      $user->setIssuingCountry($row->issuing_country_id);
      $user->setPExpDate($row->passport_expiry_date);
      
   	
	}
	return $user;

	}

  public function getUser($username){
  $this->db->from('user AS user')
          ->where('user.user_id', $username);
  $query = $this->db->get();
  $user=null;
  if ($query->num_rows() > 0)
  {
      $row = $query->row();
      $user= new user();
      $user->setId($row->id);
      $user->setUserId($row->user_id);
      $user->setPassword($row->password);
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
      $user->setType($row->user_type_id);
      $user->setPassport($row->passport);
      $user->setVisaExpDate($row->visa_expiry_date);
      $user->setIssuingCountry($row->issuing_country_id);
      $user->setPExpDate($row->passport_expiry_date);
      
    
  }
  return $user;

  }
}

?>