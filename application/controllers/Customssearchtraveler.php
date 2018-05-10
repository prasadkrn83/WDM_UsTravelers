<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customssearchtraveler extends CI_Controller {


	public function index()
	{
		if(!$this->session->has_userdata('user')){
			redirect(base_url().'login');
		}else{
			$this->load->view('header_include');
			$this->load->view('header_view');
			$this->load->view('customs_nav_view');
			$this->load->view('myprofile_view');
			$this->load->view('customs_search_traveler_view');
			$this->load->view('footer_view');
		}
	}
	public function searchTraveler(){
		$user=$this->customs_model->searchCustomOfficer($this->input->post('passport'));
		echo json_encode($user);
	} 

	public function deleteUser(){
		$user=$this->customs_model->deleteUser($this->input->post('userid'));
		echo json_encode($user);
	} 
}