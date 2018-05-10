<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travelerhome extends CI_Controller {


	public function index()
	{
		if(!$this->session->has_userdata('user')){
			redirect(base_url().'login');
		}else{
			$user=$this->session->userdata('user');
			$data['travelHistory']=$this->travelrequest_model->getMyTravelHistory($user->getId());
			$data['user']=$user;
			$this->load->view('header_include');
			$this->load->view('header_view');
			$this->load->view('traveler_nav_view');
			$this->load->view('myprofile_view');
			$this->load->view('traveler_home_view',$data);
			$this->load->view('footer_view');
		}
	}
}