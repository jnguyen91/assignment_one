<?php

require_once(APPPATH . 'core/Entity.php');

/**
 * Defines an airport.
 */
class Airport extends Entity {

	private $id;
	private $community;
	private $airport;
	private $region;
	private $coordinates;
	private $runway;
	private $airline;
	private $type;

	/**
	 * Sets the airport ID.
	 * 
	 * @param string    $value    ID of the airport
	 */
	public function setId($value) {
		// alpha|exact_length[3]
		if (preg_match('/^[a-zA-Z]{3}$/', $value)) {
			$this->id = strtoupper($value);
		}

		return;
	}

	/**
	 * Gets the airport ID.
	 * 
	 * @return string    ID of the vehicle
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Sets the community of the airport.
	 * 
	 * @param string    $value    Community of the airport
	 */
	public function setCommunity($value) {
		// alpha_numeric_spaces|max_length[64]
		if (preg_match('/^[a-zA-Z\s\d]{1,64}$/', $value)) {
			$this->community = $value;
		}

		return;
	}

	/**
	 * Gets the community of the airport.
	 * 
	 * @return string    Community of the airport
	 */
	public function getCommunity() {
		return $this->community;
	}

	/**
	 * Sets the name of the airport.
	 * 
	 * @param string    $value    Name of the airport
	 */
	public function setAirport($value) {
		// alpha_numeric_spaces|max_length[64]
		if (preg_match('/^[a-zA-Z\s\d]{1,64}$/', $value)) {
			$this->airport = $value;
		}

		return;
	}

	/**
	 * Gets the name of the airport.
	 * 
	 * @return string    Name of the airport
	 */
	public function getAirport() {
		return $this->airport;
	}

	/**
	 * Sets the region of the airport.
	 * 
	 * @param int    $value    Region of the airport
	 */
	public function setRegion($value) {
		// integer|greater_than[0]|smaller_than[100]
		if (preg_match('/^[1-9][0-9]{0,1}$/', $value)) {
			$this->region = $value;
		}

		return;
	}

	/**
	 * Gets the region of the airport.
	 * 
	 * @return int    Region of the airport
	 */
	public function getRegion() {
		return $this->region;
	}

	/**
	 * Sets the coordinates of the airport.
	 * 
	 * @param string    $value    Coordinates of the airport
	 */
	public function setCoordinates($value) {
		// alpha_numeric|max_length[64]
		if (preg_match('/^[a-zA-Z\d\\]{1,64}$/', $value)) {
			$this->coordinates = $value;
		}

		return;
	}

	/**
	 * Gets the coordinates of the airport.
	 * 
	 * @return string    Coordinates of the airport
	 */
	public function getCoordinates() {
		return $this->coordinates;
	}

	/**
	 * Sets the runway of the airport.
	 * 
	 * @param int    $value    Runway of the airport
	 */
	public function setRunway($value) {
		// integer|greater_than[0]|smaller_than[10000]
		if (preg_match('/^[1-9][0-9]{0,3}$/', $value)) {
			$this->runway = $value;
		}

		return;
	}

	/**
	 * Gets the runway of the airport.
	 * 
	 * @return int    Runway of the airport
	 */
	public function getRunway() {
		return $this->runway;
	}

	/**
	 * Sets the airline of the airport.
	 * 
	 * @param string    $value    Airline of the airport
	 */
	public function setAirline($value) {
		// alpha|max_length[64]
		if (preg_match('/^[a-zA-Z]{1,64}$/', $value)) {
			$this->airline = strtolower($value);
		}

		return;
	}

	/**
	 * Gets the airline of the airport.
	 * 
	 * @return string    Airline of the airport
	 */
	public function getAirline() {
		return $this->airline;
	}

	/**
	 * Sets the type of the airport.
	 * 
	 * @param string    $value    Type of the airport
	 */
	public function setType($value) {
		// alpha|exact_length[4]
		// /^base\b|dest\b$/
		if (preg_match('/^[a-zA-Z]{4}$/', $value)) {
			$this->type = $value;
		}

		return;
	}

	/**
	 * Gets the type of the airport.
	 * 
	 * @return string    Type of the airport
	 */
	public function getType() {
		return $this->type;
	}
}