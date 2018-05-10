<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helper extends CI_Controller {


	public function index()
	{
	}

	public function getAllStates(){
		$countryId=$this->input->post('countryId');
		$stateList=$this->helper_model->getAllStates($countryId);
		echo json_encode($stateList);

	}

	public function getAllCities(){
		$stateId=$this->input->post('stateId');
		$cityList=$this->helper_model->getAllCities($stateId);
		echo json_encode($cityList);

	}

	public function getAllUSPOE(){
		$cityId=$this->input->post('cityId');
		$cityList=$this->helper_model->getAllUSPOE($cityId);
		echo json_encode($cityList);

	}
	public function getPOEDetails(){
		$poeId=$this->input->post('poeId');
		$cityList=$this->helper_model->getPOEDetails($poeId);
		echo json_encode($cityList);

	}
}
