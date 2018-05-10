<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {


	public function index()
	{
		$data['countryList']=$this->helper_model->getAllCountries();
		$data['usStateList'] =$this->helper_model->getAllUSStates();
		$data['statusList'] =$this->helper_model->getAllStatus();
		$data['visaList'] =$this->helper_model->getVisaCategory();
		

		$this->load->view('header_include');
		$this->load->view('registration_view',$data);
		$this->load->view('footer_view');

	}

	public function registerUser(){
		$data = array(
			'user_id'=> $this->input->post('username'),
	        'password'=> $this->input->post('pwd1'),
	        'fname'=> $this->input->post('fn'),
	        'mname'=> $this->input->post('mn'),
	        'lname'=> $this->input->post('ln'),
	        'email_id'=> $this->input->post('emailid'),
	        'date_of_birth'=> $this->input->post('dob'),
	        'address1'=> $this->input->post('add1'),
	        'address2'=> $this->input->post('add2'),
	        'city_id'=> $this->input->post('city'),
	        'state_id'=> $this->input->post('state'),
	        'country_id'=> $this->input->post('country'),
	        'zipcode'=> $this->input->post('zipcode'),
	        'visatype_id'=> $this->input->post('visacat'),
	        'visa_number'=> $this->input->post('visa'),
	        'visa_expiry_date'=> $this->input->post('vexpdate'),
	        'passport'=> $this->input->post('passport'),
	        'issuing_country_id'=> $this->input->post('issuingcountry'),
	        'passport_expiry_date'=> $this->input->post('pexp'),
	        'user_type_id'=> '1',
	        'accountstatus'=> 'Y',
	        
	        );

			if($this->registration_model->resgisterUser($data)){
				$data['isInsert'] = true;
			}else{
				$data['isInsert'] = false;
			}
			$this->load->view('header_include');
			$this->load->view('login_view',$data);
			$this->load->view('footer_view');

	}

	public function createcustomofficer(){

			$data = array(
			'user_id'=> $this->input->post('username_cco'),
	        'password'=> $this->input->post('pwd_cco'),
	        'fname'=> $this->input->post('firstname_cco'),
	        'mname'=> $this->input->post('middlename_cco'),
	        'lname'=> $this->input->post('lastname_cco'),
	        'email_id'=> $this->input->post('newemail_cco'),
	        'date_of_birth'=> $this->input->post('dob'),
	        'address1'=> $this->input->post('addr1_cco'),
	        'address2'=> $this->input->post('addr2_cco'),
	        'city_id'=> $this->input->post('poscity'),
	        'state_id'=> $this->input->post('posstate'),
	        'country_id'=> '217',
	        'zipcode'=> $this->input->post('zipcode'),
	        'passport'=> $this->input->post('passport_no'),
	        'issuing_country_id'=> '217',
	        'passport_expiry_date'=> $this->input->post('expiry_date'),
	        'user_type_id'=> '2',
	        'accountstatus'=> 'Y',
	        
	        );

			if($this->registration_model->resgisterUser($data)){
				$data['isInsert'] = true;
			}else{
				$data['isInsert'] = false;
			}
			$data['usStateList'] =$this->helper_model->getAllUSStates();

			$this->load->view('header_include');
			$this->load->view('header_view');
			$this->load->view('admin_nav_view');
			$this->load->view('myprofile_view');
			$this->load->view('admin_create_customs_officer_view',$data);
			$this->load->view('footer_view');

	}


	 public function updateprofile(){
		$data = array(
			'user_id'=> $this->input->post('username'),
	        'password'=> $this->input->post('pwd1'),
	        'fname'=> $this->input->post('fn'),
	        'mname'=> $this->input->post('mn'),
	        'lname'=> $this->input->post('ln'),
	        'email_id'=> $this->input->post('emailId'),
	        'date_of_birth'=> $this->input->post('dob'),
	        'address1'=> $this->input->post('add1'),
	        'address2'=> $this->input->post('add2'),
	        'city_id'=> $this->input->post('regcity'),
	        'state_id'=> $this->input->post('regstate'),
	        'country_id'=> $this->input->post('regcountry'),
	        'zipcode'=> $this->input->post('zipcode'),
	        'visatype_id'=> $this->input->post('visacategory'),
	        'visa_number'=> $this->input->post('visa'),
	        'visa_expiry_date'=> $this->input->post('vexpdate'),
	        'passport'=> $this->input->post('passport'),
	        'issuing_country_id'=> $this->input->post('issuingcountry'),
	        'passport_expiry_date'=> $this->input->post('pexp')
	        );
			if($this->registration_model->updateprofile($data)){
				$data['isprofileupdate'] = true;
				$user=$this->login_model->getUser($data['user_id']);
				$this->session->unset_userdata('user');
				$this->session->set_userdata('user',$user);

			}else{
				$data['isprofileupdate'] = false;
			}
    	redirect($_SERVER['HTTP_REFERER'],$data);
}
}
