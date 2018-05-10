<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customshome extends CI_Controller {


	public function index()
	{
		if(!$this->session->has_userdata('user')){
			redirect(base_url().'login');
		}else{
			$data['customcount']=$this->customs_model->customcount();
			$data['warningcount']=$this->customs_model->warningcount();
			$data['reviewcount']=$this->customs_model->reviewcount();

			$this->load->view('header_include');
			$this->load->view('header_view');
			$this->load->view('customs_nav_view');
			$this->load->view('myprofile_view');
			$this->load->view('customs_home_view',$data);
			$this->load->view('footer_view');
		}
	}
}