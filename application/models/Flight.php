<?php

require_once(APPPATH . 'core/Entity.php');

/**
 * Defines a flight.
 */
class Flight extends Entity {

	private $id;
	private $departure_airport;
	private $departure_time;
	private $arrival_airport;
	private $arrival_time;
	private $day;

	/**
	 * Sets the flight ID.
	 * 
	 * @param string    $value    ID of the flight
	 */
	public function setId($value) {
		// alpha_numeric|greater_than[0]|less_than[1000]
		if (preg_match('/^Y[1-9][0-9]{1,2}$/i', $value)) {
			$letter = strtoupper(substr($value, 0, 1));
			$number = intval(substr($value, 1));

			if ($number != 0) {
				$number = sprintf('%03d', $value);
			}

			$this->id = $letter . $number;
		}

		return;
	}

	/**
	 * Gets the flight ID.
	 * 
	 * @return string    ID of the flight
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Sets the departure airport.
	 * 
	 * @param string    $value    ID of the departure airport
	 */
	public function setDepartureAirport($value) {
		// alpha|exact_length[3]
		if (preg_match('/^[a-zA-Z]{3}$/', $value)) {
			$this->departure_airport = strtoupper($value);
		}

		return;
	}

	/**
	 * Gets the departure airport.
	 * 
	 * @return string    ID of the departure airport
	 */
	public function getDepartureAirport() {
		return $this->departure_airport;
	}

	/**
	 * Sets the departure time.
	 * 
	 * @param string    $value    Departure time
	 */
	public function setDepartureTime($value) {
		// regex_match[^(2[0-3]|[01][0-9]):([0-5][0-9])$]
		if (preg_match('/^(2[0-3]|[01][0-9]):([0-5][0-9])$/', $value)) {
			$this->departure_time = $value;
		}

		return;
	}

	/**
	 * Gets the departure time.
	 * 
	 * @return string    Departure time
	 */
	public function getDepartureTime() {
		return $this->departure_time;
	}

	/**
	 * Sets the arrival airport.
	 * 
	 * @param string    $value    ID of the arrival airport
	 */
	public function setArrivalAirport($value) {
		// alpha|exact_length[3]
		if (preg_match('/^[a-zA-Z]{3}$/', $value)) {
			$this->arrival_airport = strtoupper($value);
		}

		return;
	}

	/**
	 * Gets the region of the airport.
	 * 
	 * @return string    ID of the arrival airport
	 */
	public function getArrivalAirport() {
		return $this->arrival_airport;
	}

	/**
	 * Sets the departure time.
	 * 
	 * @param string    $value    Arrival time
	 */
	public function setArrivalTime($value) {
		// regex_match[^(2[0-3]|[01][0-9]):([0-5][0-9])$]
		if (preg_match('/^(2[0-3]|[01][0-9]):([0-5][0-9])$/', $value)) {
			$this->arrival_time = $value;
		}

		return;
	}

	/**
	 * Gets the arrival time.
	 * 
	 * @return string    Arrival time
	 */
	public function getArrivalTime() {
		return $this->arrival_time;
	}

	/**
	 * Sets the day of week of the flight.
	 * 
	 * @param string    $value    Day of week of the flight
	 */
	public function setDayOfWeek($value) {
		// alpha|max_length[9]
		if (preg_match('/^monday\b|tuesday\b|wednesday\b|thursday\b|friday\b|saturday\b|sunday\b$/i', $value)) {
			$this->day = $value;
		}

		return;
	}

	/**
	 * Gets the day of week of the flight.
	 * 
	 * @return string    Day of week of the flight
	 */
	public function getDayOfWeek() {
		return $this->day;
	}
}
