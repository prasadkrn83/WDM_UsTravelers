<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->load->view('header_include');
		$this->load->view('login_view');
		$this->load->view('footer_view');
		
		


	}
	public function performLogin(){
		$countryList=$this->helper_model->getAllCountries();
		$usStateList=$this->helper_model->getAllUSStates();
		$statusList=$this->helper_model->getAllStatus();
		$visaList=$this->helper_model->getVisaCategory();
		$this->session->set_userdata('countryList', $countryList);
		$this->session->set_userdata('usStateList', $usStateList);
		$this->session->set_userdata('statusList', $statusList);
		$this->session->set_userdata('visaList', $visaList);


		$data = array(
			'username'=> $this->security->xss_clean($this->input->post('username')),
	        'password'=> $this->security->xss_clean($this->input->post('password'))
	    );

		$user=$this->login_model->validateLogin($data);
		if(!$user){
			$data['loginFailed']=true;
			$this->load->view('header_include');
			$this->load->view('login_view',$data);
			$this->load->view('footer_view');
		}else if($user->getType()=='1'){
			$this->session->set_userdata('user',$user);
			redirect( base_url().'travelerhome');
		}else if($user->getType()=='2'){
			$this->session->set_userdata('user',$user);
			redirect( base_url().'customshome');
		}else if($user->getType()=='3'){
			$this->session->set_userdata('user',$user);
			redirect( base_url().'adminhome');
		}

	}

	public function performLogout(){
		$this->session->unset_userdata('user');
		$this->session->sess_destroy();
		$this->load->view('header_include');
		$this->load->view('login_view');
		$this->load->view('footer_view');
	}

	function loadTravelerHome(){
		
		
		$this->load->view('header_include');
		$this->load->view('header_view');
		$this->load->view('traveler_nav_view');
		$this->load->view('myprofile_view');
		$this->load->view('traveler_home_view');
		$this->load->view('footer_view');

	}

	function loadAdminHome(){

		$this->load->view('header_include');
		$this->load->view('header_view');
		$this->load->view('admin_nav_view');
		$this->load->view('myprofile_view');
		$this->load->view('admin_search_user_view');
		$this->load->view('footer_view');
	}
	function loadCustomsHome(){
		$this->load->view('header_include');
		$this->load->view('header_view');
		$this->load->view('customs_nav_view');
		$this->load->view('myprofile_view');
		$this->load->view('customs_home_view');
		$this->load->view('footer_view');

	}
}
