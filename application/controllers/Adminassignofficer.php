<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminassignofficer extends CI_Controller {


	public function index()
	{
		$data['usStateList']=$this->helper_model->getAllUSStates();
		if(!$this->session->has_userdata('user')){
			redirect(base_url().'login');
		}else{
			$this->load->view('header_include');
			$this->load->view('header_view');
			$this->load->view('admin_nav_view');
			$this->load->view('myprofile_view',$data);
			$this->load->view('Admin_assign_officer_view',$data);
			$this->load->view('footer_view');
		}
	}

	public function assignofficer(){
		$userid=$this->input->post('assignid');
		$poe_id=$this->input->post('poe');
		if($this->admin_model->assignOfficetoPOE($userid,$poe_id)){
		$data['isInsert'] = true;
			}else{
				$data['isInsert'] = false;
			}
		$data['usStateList']=$this->helper_model->getAllUSStates();
		$this->load->view('header_include');
			$this->load->view('header_view');
			$this->load->view('admin_nav_view');
			$this->load->view('myprofile_view',$data);
			$this->load->view('Admin_assign_officer_view',$data);
			$this->load->view('footer_view');
		
	}
}
?>
