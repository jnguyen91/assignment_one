<?php

/**
 * Retrieves shared data from the WACKY server.
 * 
 * @link https://wacky.jlparry.com/
 */
class WackyData extends CI_Model {

	private $airlines;
	private $airports;
	private $airplanes;
	private $regions;
	
	public function __construct() {
		parent::__construct();

		$airlines = file_get_contents('https://wacky.jlparry.com/info/airlines');
		$airports = file_get_contents('https://wacky.jlparry.com/info/airports');
		$airplanes = file_get_contents('https://wacky.jlparry.com/info/airplanes');
		$regions = file_get_contents('https://wacky.jlparry.com/info/regions');
	}
}
