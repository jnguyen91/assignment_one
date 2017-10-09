<?php

/**

 * Airplanes model. Contains airplanes information.
 *
 * @author Lenic Zhang
 
 * This is a "CMS" model for quotes, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *

 */
class Airplanes extends CI_Model
{
	var $data = array(

		'1' => array(
			'vehicleID' => '001',
			'id' => 'citation',
			'manufacturer'	=> 'Cessna', 
			'model' => 'Citation M2',
			'price' => '3200',
			'seats' => '7',
			'reach' => '1550',
			'cruise' => '748',
			'takeoff' => '978', 
			'hourly' => '1122'
		),
		'2'	=> array(
			'vehicleID' => '002',
			'id' => 'mustang',
			'manufacturer' => 'Cessna', 
			'model'	=> 'Citation Mustang',
			'price'	=> '2770',
			'seats' => '4',
			'reach' => '2130',
			'cruise' => '630',
			'takeoff' => '950', 
			'hourly' => '1015'
		),
		'3' => array(
			'vehicleID' => '003',
			'id' => 'kingair',
			'manufacturer' => 'Beechcraft', 
			'model'	=> 'King Air C90',
			'price' => '3900',
			'seats' => '12',
			'reach' => '2446',
			'cruise' => '500',
			'takeoff' => '1402', 
			'hourly' => '990'
		)		
	);

	/**
	 * Constructor.
	 */

	public function __construct()
	{
		parent::__construct();


		// inject each "record" key into the record itself, for ease of presentation
		foreach ($this->data as $key => $record)
		{
			$record['key'] = $key;
			$this->data[$key] = $record;
		}
	}


	/**
	 * Retrieves a single airplane, null if not found.
	 * 
	 * @param  int 			$which 	the key of an airplane
	 * @return array|null        	an airplane, or null if not found
	 */

	// retrieve a single airplane, null if not found

	public function get($which)
	{
		return !isset($this->data[$which]) ? null : $this->data[$which];
	}


	/**
	 * Retreives all of the airplanes.
	 * 
	 * @return array all of the airplanes
	 */

	// retrieve all of the airplanes

	public function all()
	{
		return $this->data;
	}
}
