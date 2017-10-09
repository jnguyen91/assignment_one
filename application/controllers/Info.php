<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * RESTish service controller that returns model data in JSON format, on demand.
 *
 * @author Ian Park
 */
class Info extends CI_Controller
{
	/**
	 * Index Page for this controller (/info). Method name is required for all
	 * inquiries. If method name is not provided, e.g., /info/<method_name>,
	 * the users will be redirected to the homepage.
	 */
	public function index()
	{
		header('Location: /');
	}

	/**
	 * Gets all of the airport information in JSON format.
	 */
	public function airports() {
		$record = $this->airports;
        header("Content-type: application/json");
        echo json_encode($record, JSON_PRETTY_PRINT);
	}
	
	/**
	 * Gets all of the flight schedules in JSON format.
	 */
	public function flights() {
		$record = $this->flight;
		header("Content-type: application/json");
		echo json_encode($record, JSON_PRETTY_PRINT);
	}

	public function fleet() {
		$record = $this->airplanes;
		header("Content-type: application/json");
		echo json_encode($record, JSON_PRETTY_PRINT);
	}
}
