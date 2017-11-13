<?php

require_once(APPPATH . 'core/Entity.php');

/**
 * Defines an airplane.
 */
class Airplane extends Entity {

	private $id;
	private $manufacturer;
	private $model;
	private $price;
	private $seats;
	private $reach;
	private $cruise;
	private $takeoff;
	private $hourly;

	/**
	 * Sets the vehicle ID.
	 * 
	 * @param string    $value    ID of the vehicle
	 */
	public function setId($value) {
		// alpha_numeric|max_length[64]
		if (preg_match('/^[a-z\d]{1,64}$/', $value)) {
			// $this->vehicleId = sprintf('%03d', $value);
			$this->id = $value;
		}

		return;
	}

	/**
	 * Gets the vehicle ID.
	 * 
	 * @return string    ID of the vehicle
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Sets the manufacturer.
	 * 
	 * @param string    $value    Manufacturer of the airplane
	 */
	public function setManufacturer($value) {
		// alpha_numeric_spaces|max_length[64]
		if (preg_match('/^[a-zA-Z\d\s]{1,64}$/', $value)) {
			$this->manufacturer = $value;
		}

		return;
	}

	/**
	 * Gets the manufacturer.
	 * 
	 * @return string    Manufacturer of the airplane
	 */
	public function getManufacturer() {
		return $this->manufacturer;
	}

	/**
	 * Sets the model.
	 * 
	 * @param string    $value    Model of the airplane
	 */
	public function setModel($value) {
		// alpha_numeric_spaces|max_length[64]
		if (preg_match('/^[a-zA-Z\d\s]{1,64}$/', $value)) {
			$this->model = $value;
		}

		return;
	}

	/**
	 * Gets the model.
	 * 
	 * @return string    Model of the airplane
	 */
	public function getModel() {
		return $this->model;
	}

	/**
	 * Sets the price.
	 * 
	 * @param int    $value    Price of the airplane
	 */
	public function setPrice($value) {
		// integer|greater_than[0]|smaller_than[100000]
		if (preg_match('/^[1-9][0-9]{0,4}$/', $value)) {
			$this->price = $value;
		}

		return;
	}

	/**
	 * Gets the price.
	 * 
	 * @return string    Price of the airplane
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * Sets the number of seats.
	 * 
	 * @param int    $value    Number of seats of the airplane
	 */
	public function setSeats($value) {
		// integer|greater_than[0]|smaller_than[1000]
		if (preg_match('/^[1-9][0-9]{0,2}$/', $value)) {
			$this->seats = $value;
		}

		return;
	}

	/**
	 * Gets the number of seats.
	 * 
	 * @return int    Number of seats of the airplane
	 */
	public function getSeats() {
		return $this->seats;
	}

	/**
	 * Sets the reach.
	 * 
	 * @param int    $value    Reach of the airplane
	 */
	public function setReach($value) {
		// integer|greater_than[0]|smaller_than[10000]
		if (preg_match('/^[1-9][0-9]{0,3}$/', $value)) {
			$this->reach = $value;
		}

		return;
	}

	/**
	 * Gets the reach.
	 * 
	 * @return int    Reach of the airplane
	 */
	public function getReach() {
		return $this->reach;
	}

	/**
	 * Sets the cruise.
	 * 
	 * @param int    $value    Cruise of the airplane
	 */
	public function setCruise($value) {
		// integer|greater_than[0]|smaller_than[10000]
		if (preg_match('/^[1-9][0-9]{0,3}$/', $value)) {
			$this->cruise = $value;
		}

		return;
	}

	/**
	 * Gets the cruise.
	 * 
	 * @return int    Cruise of the airplane
	 */
	public function getCruise() {
		return $this->cruise;
	}

	/**
	 * Sets the takeoff.
	 * 
	 * @param int    $value    Takeoff of the airplane
	 */
	public function setTakeoff($value) {
		// integer|greater_than[0]|smaller_than[10000]
		if (preg_match('/^[1-9][0-9]{0,3}$/', $value)) {
			$this->takeoff = $value;
		}

		return;
	}

	/**
	 * Gets the takeoff.
	 * 
	 * @return int    Takeoff of the airplane
	 */
	public function getTakeoff() {
		return $this->takeoff;
	}

	
	/**
	 * Sets the hourly.
	 * 
	 * @param int    $value    Hourly of the airplane
	 */
	public function setHourly($value) {
		// integer|greater_than[0]|smaller_than[10000]
		if (preg_match('/^[1-9][0-9]{0,3}$/', $value)) {
			$this->hourly = $value;
		}

		return;
	}

	/**
	 * Gets the hourly.
	 * 
	 * @return int    Hourly of the airplane
	 */
	public function getHourly() {
		return $this->hourly;
	}
}
