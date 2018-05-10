<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customsreports extends CI_Controller {


	public function index()
	{
		if(!$this->session->has_userdata('user')){
			redirect(base_url().'login');
		}else{
			$data['statusList'] = $this->session->userdata('statusList');
			$data['countryList'] = $this->session->userdata('countryList');
			$data['usStateList'] = $this->session->userdata('usStateList');

			$this->load->view('header_include');
			$this->load->view('header_view');
			$this->load->view('customs_nav_view');
			$this->load->view('myprofile_view');
			$this->load->view('customs_reports_view',$data);
			$this->load->view('footer_view');
		}
	}
	public function getReports(){
		$travelstartdate=$this->input->post('travelstartdate');
		$travelenddate=$this->input->post('travelenddate');
		$currstat=$this->input->post('currstat');
		$depcountry=$this->input->post('depcountry');
		$poe=$this->input->post('poe');
		
		$data['travelDetails']=$this->customs_model->getReports($travelstartdate,$travelenddate,$currstat,$depcountry,$poe);
		$data['statusList'] = $this->session->userdata('statusList');
		$data['countryList'] = $this->session->userdata('countryList');
		$data['usStateList'] = $this->session->userdata('usStateList');

		$this->load->view('header_include');
		$this->load->view('header_view');
		$this->load->view('customs_nav_view');
		$this->load->view('myprofile_view');
		$this->load->view('customs_reports_view',$data);
		$this->load->view('footer_view');
		}
	
}