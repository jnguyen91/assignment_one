<?php

/**
 * Airports model. Contains airports information.
 */
class Airports extends CSV_Model {

	/**
	 * Constructor.
	 */
	public function __construct() {
		parent::__construct(APPPATH . '../data/airports.csv', 'id');
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
				'label' => 'Airport ID',
				'rules' => 'alpha|exact_length[3]'
			],
			[
				'field' => 'community',
				'label' => 'Community',
				'rules' => 'alpha_numeric_spaces|max_length[64]'
			],
			[
				'field' => 'airport',
				'label' => 'Airport',
				'rules' => 'alpha_numeric_spaces|max_length[64]'
			],
			[
				'field' => 'region',
				'label' => 'Region',
				'rules' => 'integer|greater_than[0]|smaller_than[100]'
			],
			[
				'field' => 'coordinates',
				'label' => 'Coordinates',
				'rules' => 'alpha_numeric|max_length[64]'
			],
			[
				'field' => 'runway',
				'label' => 'Runway',
				'rules' => 'integer|greater_than[0]|smaller_than[10000]'
			],
			[
				'field' => 'airline',
				'label' => 'Airline',
				'rules' => 'alpha|max_length[64]'
			],
			[
				'field' => 'type',
				'label' => 'Type',
				'rules' => 'alpha|exact_length[4]'
			]
		);

		return $config;
	}
}
