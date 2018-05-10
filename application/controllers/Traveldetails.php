<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Traveldetails extends CI_Controller {


	public function index()
	{
		if(!$this->session->has_userdata('user')){
			redirect(base_url().'login');
		}else{
			$this->load->view('header_include');
			$this->load->view('header_view');
			$this->load->view('traveler_nav_view');
			$this->load->view('myprofile_view');
			$this->load->view('travel_details_view');
			$this->load->view('footer_view');
		}
	}
	public function getmytraveldetails(){
		$user=$this->session->userdata('user');
		$travelstartdate=$this->input->post('mytravelstartdate');
		$travelenddate=$this->input->post('mytravelenddate');
		
		$data['travelDetails']=$this->travelrequest_model->getMyTravelDetails($user->getId(),$travelstartdate,$travelenddate);
			$this->load->view('header_include');
			$this->load->view('header_view');
			$this->load->view('traveler_nav_view');
			$this->load->view('myprofile_view');
			$this->load->view('travel_details_view',$data);
			$this->load->view('footer_view');
	}
	public function getTravelDetail(){
		$travelId=$this->input->post('id');
		$travelDetails=$this->customs_model->getTravelDetail($travelId);
		echo json_encode($travelDetails);

	}
}