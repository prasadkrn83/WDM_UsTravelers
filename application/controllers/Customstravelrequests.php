<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customstravelrequests extends CI_Controller {


	public function index()
	{
		if(!$this->session->has_userdata('user')){
			redirect(base_url().'login');
		}else{
			$data['statusList'] = $this->session->userdata('statusList');
			$this->load->view('header_include');
			$this->load->view('header_view');
			$this->load->view('customs_nav_view');
			$this->load->view('myprofile_view');
			$this->load->view('customs_travel_requests_view',$data);
			$this->load->view('footer_view');
		}
	}

	public function searchTravelRequest(){
		$tstartdate=$this->input->post('travelstartdate');
		$tenddate=$this->input->post('travelenddate');
		$entstate=$this->input->post('entstate');
		$data['travelDetails']=$this->customs_model->searchTravelRequest($tstartdate,$tenddate,$entstate);
		$data['statusList'] = $this->session->userdata('statusList');
			$this->load->view('header_include');
			$this->load->view('header_view');
			$this->load->view('customs_nav_view');
			$this->load->view('myprofile_view');
			$this->load->view('customs_travel_requests_view',$data);
			$this->load->view('footer_view');
	}

	public function getTravelDetail(){
		$travelId=$this->input->post('id');
		$travelDetails=$this->customs_model->getTravelDetail($travelId);
		echo json_encode($travelDetails);

	}

	public function updateTravelDetail(){
		$travelId=$this->input->post('id');
		$status=$this->input->post('currstat');
		$comments=$this->input->post('comments');
		$response=false;

		if($this->customs_model->updateTravelDetail($travelId,$status,$comments)){
			$response=true;
		}
		echo json_encode($response);

	}
}