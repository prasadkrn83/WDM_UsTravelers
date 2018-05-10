<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincreatecustomsofficer extends CI_Controller {


	public function index()
	{
		if(!$this->session->has_userdata('user')){
			redirect(base_url().'login');
		}else{


			$data['usStateList'] =$this->helper_model->getAllUSStates();

			$this->load->view('header_include');
			$this->load->view('header_view');
			$this->load->view('admin_nav_view');
			$this->load->view('myprofile_view');
			$this->load->view('admin_create_customs_officer_view',$data);
			$this->load->view('footer_view');
		}
	}
}