<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travelertravelrequest extends CI_Controller {


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
			$this->load->view('traveler_nav_view');
			$this->load->view('myprofile_view');
			$this->load->view('traveler_travel_request_view');
			$this->load->view('footer_view');
		}
	}

	public function createTravelRequest(){

/*	$this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="errorMessage showElement">', '</div>');

		$this->form_validation->set_rules('tstartdate', 'Travel Start Date',  'required|callback_validate_fromdate');
			$this->form_validation->set_rules('tstartdate', 'Travel Start Date',  'required|callback_validate_fromdate');
			$this->form_validation->set_rules('address', 'Address', 'required|min_length[10]|max_length[50]');
		$this->form_validation->set_rules('city', 'City',  'required|min_length[2]');
		$this->form_validation->set_rules('state', 'State',  'required|min_length[2]');
		$this->form_validation->set_rules('zip', 'Zipcode',  'required|regex_match[/^\d{5}\-\d{4}$/]');
		$this->form_validation->set_rules('creditcard', 'Credit Card',  'required|regex_match[/^4\d{3}[\s\-]\d{4}[\s\-]\d{4}[\s\-]\d{4}$/]');
		$this->form_validation->set_rules('expyear', 'Year',  'required|regex_match[/^\d{4}$/]');
		$this->form_validation->set_rules('expirymonth', 'Month',  'required');

		if ($this->form_validation->run() == FALSE) {
			$this->loadViews(NULL);
		
		} else {
*/
        $user=null;
		if(!$this->session->has_userdata('user')){
			redirect(base_url().'login');
		}else{
			$user = $this->session->userdata('user');

		}
			$data = array(
	        'user_id'=> $user->getId(),
			'start_date'=> $this->input->post('tstartdate'),
	        'end_date'=> $this->input->post('tenddate'),
	        'flight_number'=> $this->input->post('airlinenumber'),
	        'arrival_time'=> $this->input->post('arrivaltime'),
	        'departing_city'=> $this->input->post('depcity'),
	        'departing_country'=> $this->input->post('depcountry'),
	       	'poe_id'=> $this->input->post('poe'),
	        'address1'=> $this->input->post('usadd1'),
	        'address2'=> $this->input->post('usadd2'),
	        'city_id'=> $this->input->post('poscity'),
	        'state_id'=> $this->input->post('posstate'),
	        'zipcode'=> $this->input->post('poszipcode'),
	        'customs_status'=> '1'
	        );

			$this->travelrequest_model->createTravelRequest($data);
			$data['isInsert'] = true;
			$this->loadViews($data);

		//}	
	}
	function loadViews($data){

		$this->load->view('header_include');
			$this->load->view('header_view');
			$this->load->view('traveler_nav_view');
			$this->load->view('myprofile_view');
			$this->load->view('traveler_travel_request_view',$data);
			$this->load->view('footer_view');
	}
	function validate_fromdate($travelStartDate){
		$travelStartDate  = date_create($date);
		$today 	= date_create(); // Current time and date
		$diff  	= date_diff( $today, $travelStartDate );
		if(strtotime($database_date) < strtotime('now')){
			return false;
		}
		if(($diff->d)<7){
			return false;
		}else{
			return true;
		}

	}

	function checkDateFormat($date) {
		if (preg_match("/[0-31]{2}/[0-12]{2}/[0-9]{4}/", $date)) {
			if(checkdate(substr($date, 3, 2), substr($date, 0, 2), substr($date, 6, 4)))
				return true;
			else
				return false;
		} else {
			return false;
			}
		}

}