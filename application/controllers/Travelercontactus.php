<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travelercontactus extends CI_Controller {


	public function index()
	{
		if(!$this->session->has_userdata('user')){
			redirect(base_url().'login');
		}else{
			$this->load->view('header_include');
			$this->load->view('header_view');
			$this->load->view('traveler_nav_view');
			$this->load->view('myprofile_view');
			$this->load->view('traveler_contact_us_view');
			$this->load->view('footer_view');
		}
	}
}