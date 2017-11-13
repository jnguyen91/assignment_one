<?php

/**
 * Flights model. Contains the list of scheduled flights.
 */
class Flights extends CSV_Model {
	
	/**
	 * Constructor.
	 */
	public function __construct() {
		parent::__construct(APPPATH . '../data/flights.csv', 'id');
	}

	/**
	 * Defines labels and rules of all the fields.
	 * 
	 * @return array    An array of fields and the configurations
	 */
	public function rules() {
		$config = array(
			[
				'field' => 'id',
				'label' => 'Flight ID',
				'rules' => 'alpha_numeric|greater_than[0]|less_than[1000]'
			],
			[
				'field' => 'departure_airport',
				'label' => 'Departure Airport',
				'rules' => 'alpha|exact_length[3]'
			],
			[
				'field' => 'departure_time',
				'label' => 'Departure Time',
				'rules' => 'regex_match[^(2[0-3]|[01][0-9]):([0-5][0-9])$]'
			],
			[
				'field' => 'arrival_airport',
				'label' => 'Arrival Airport',
				'rules' => 'alpha|exact_length[3]'
			],
			[
				'field' => 'arrival_time',
				'label' => 'Arrival Time',
				'rules' => 'regex_match[^(2[0-3]|[01][0-9]):([0-5][0-9])$]'
			],
			[
				'field' => 'day',
				'label' => 'Day of Week',
				'rules' => 'alpha|max_length[9]'
			]
		);

		return $config;
	}
}