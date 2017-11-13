<?php

/**
 * Airplanes model. Contains airplanes information.
 */
class Airplanes extends CSV_Model {

	/**
	 * Constructor.
	 */
	public function __construct() {
		parent::__construct(APPPATH . '../data/airplanes.csv', 'id');
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
				'label' => 'Vehicle ID',
				'rules' => 'alpha_numeric|max_length[64]'
			],
			[
				'field' => 'manufacturer',
				'label' => 'Manufacturer',
				'rules' => 'alpha_numeric_spaces|max_length[64]'
			],
			[
				'field' => 'model',
				'label' => 'Model',
				'rules' => 'alpha_numeric_spaces|max_length[64]'
			],
			[
				'field' => 'price',
				'label' => 'Price',
				'rules' => 'integer|greater_than[0]|smaller_than[100000]'
			],
			[
				'field' => 'seats',
				'label' => 'Seats',
				'rules' => 'integer|greater_than[0]|smaller_than[1000]'
			],
			[
				'field' => 'reach',
				'label' => 'Reach',
				'rules' => 'integer|greater_than[0]|smaller_than[10000]'
			],
			[
				'field' => 'cruise',
				'label' => 'Cruise',
				'rules' => 'integer|greater_than[0]|smaller_than[10000]'
			],
			[
				'field' => 'takeoff',
				'label' => 'Takeoff',
				'rules' => 'integer|greater_than[0]|smaller_than[10000]'
			],
			[
				'field' => 'hourly',
				'label' => 'Hourly',
				'rules' => 'integer|greater_than[0]|smaller_than[10000]'
			]
		);

		return $config;
	}
}
