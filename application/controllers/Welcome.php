<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Welcome controller.
 *
 * @author Jeffrey Nguyen
 */
class Welcome extends Application
{
	
	/**
	 * Constructor.
	 */
	function __construct()
    {
        parent::__construct();
    }

    /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function index()
	{
	    $airplanes = $this->airplanes->all();
	    $flights = $this->flights->all();
	    $numSchedules = 0;
	    $airports = $this->airports->all();
	    $base = 'No Base Airport';
	    $destinations = array();

	    /*foreach ($flights as $flights) {
	    	if (strcmp($flights['day'], 'Monday') == 0) {
                $numSchedules++;
            }
	    }*/

	    /*foreach ($airports as $airports) {
	    	if (strcmp($airports['type'], 'base') == 0) {
                $base = $airports['airport'];
            } else {
            	array_push($destinations, $airports);
            }
	    }*/

		$this->data['pagebody'] = 'welcome_message';
		$this->data['numAirplanes'] = count($airplanes);
	    $this->data['numFlights'] = $numSchedules;
        $this->data['base'] = $base;
        $this->data['destinations'] = $destinations;
		$this->render();
	}
}