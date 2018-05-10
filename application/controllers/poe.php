<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poe extends CI_Controller {


	public function index()
	{
		if(!$this->session->has_userdata('user')){
			redirect(base_url().'login');
		}else{
			$data['usStateList']=$this->helper_model->getAllUSStates();

			$this->load->view('header_include');
			$this->load->view('header_view');
			$this->load->view('traveler_nav_view');
			$this->load->view('poe_view',$data);
			$this->load->view('footer_view');
		}
	}

	public function getPOEDetails(){
		$portofentry=$this->poe_model->getPOEDetails($this->input->post('poeid'));
		echo json_encode($portofentry);

	} 
}