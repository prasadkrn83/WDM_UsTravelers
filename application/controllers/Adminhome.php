<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminhome extends CI_Controller {


	public function index()
	{
		if(!$this->session->has_userdata('user')){
			redirect(base_url().'login');
		}else{
			$this->load->view('header_include');
			$this->load->view('header_view');
			$this->load->view('admin_nav_view');
			$this->load->view('myprofile_view');
			$this->load->view('admin_search_user_view');
			$this->load->view('footer_view');
		}
	}
	public function searchUser(){
		$user=$this->customs_model->searchUser($this->input->post('passport'));
		echo json_encode($user);
	} 
	public function deleteUser(){
		$user=$this->registration_model->deleteUser($this->input->post('userid'));
		echo json_encode($user);
	} 
}