<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resetpassword extends CI_Controller {


	function __construct()
{	
parent::__construct();
}
	public function index()
	{
		$this->load->view('header_include');
		$this->load->view('reset_password_view');
		$this->load->view('footer_view');

	}
	public function performresetpassword(){
			$config = Array(
			    'protocol' => 'smtp',
			    'smtp_host' => 'ssl://smtp.googlemail.com',
			    'smtp_port' => 465,
			    'smtp_user' => 'biswawdm',
			    'smtp_pass' => 'Welcome-123',
			    'mailtype'  => 'html', 
			    'charset'   => 'iso-8859-1'
			);
			$this->email->initialize($config);
			$this->email->SMTPOptions = array(
				'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
				)
				);
			$emailid=$this->input->post('emailid');
			$this->email->from('support@ustravelers.com');
			$this->email->to($emailid);
			$this->email->subject('Test email from CI and Gmail');
			$this->email->message('This is a test.');

			$result = $this->email->send();

			var_dump($result);
	}
}
