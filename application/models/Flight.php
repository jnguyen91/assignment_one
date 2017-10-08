<?php

// First letter of the airline, Yellow Hammer.
define("IDENTIFYING_LETTER", 'Y');

/**
 * Flights model. Contains the list of scheduled flights.
 *
 * @author Ian Park
 */
class Flight extends CI_Model
{
	
	// const IDENTIFYING_LETTER = 'Y';

	var $data = [
		0 => [
			'id' => IDENTIFYING_LETTER . '001',
			'departure_airport' => 0,
			'departure_time' => '10:30',
			'arrival_airport' => 1,
			'arrival_time' => '19:10'
		],
		1 => [
			'id' => IDENTIFYING_LETTER . '002',
			'departure_airport' => 0,
			'departure_time' => '11:30',
			'arrival_airport' => 2,
			'arrival_time' => '15:15'
		],
		2 => [
			'id' => IDENTIFYING_LETTER . '003',
			'departure_airport' => 1,
			'departure_time' => '18:30',
			'arrival_airport' => 2,
			'arrival_time' => '06:40'
		],
		3 => [
			'id' => IDENTIFYING_LETTER . '004',
			'departure_airport' => 1,
			'departure_time' => '09:00',
			'arrival_airport' => 3,
			'arrival_time' => '16:50'
		],
		4 => [
			'id' => IDENTIFYING_LETTER . '005',
			'departure_airport' => 3,
			'departure_time' => '12:30',
			'arrival_airport' => 4,
			'arrival_time' => '15:55'
		]
	];

	// Constructor
	public function __construct()
	{
		parent::__construct();

		// Inject each "record" key into the record itself, for ease of presentation.
		// Plus, inject airport information according to their keys.
		foreach ($this->data as $key => $record)
		{
			require_once('Airports.php');

			$record['key'] = $key;
			$this->data[$key] = $record;
			$this->data[$key]['departure_airport'] = [(new Airports)->get($record['departure_airport'])];
			$this->data[$key]['arrival_airport'] = [(new Airports)->get($record['arrival_airport'])];
		}
	}

	/**
	 * Retrieves a single flight schedule, null if not found.
	 * 
	 * @param  int 			$which 	the key of a flgit schedule
	 * @return array|null        	a flight schedule, or null if none
	 */
	public function get($which)
	{
		return !isset($this->data[$which]) ? null : $this->data[$which];
	}

	/**
	 * Retrieves all the schedules.
	 * 
	 * @return array the flight schedules
	 */
	public function all()
	{
		return $this->data;
	}
}
