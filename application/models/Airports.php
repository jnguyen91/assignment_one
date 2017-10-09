<?php

/**
 * Airports model. Contains a list of airports.
 *
 * @author Ian Park
 */
class Airports extends CI_Model
{

	var $data = [
		0 => [
			'id' => 'XQU',
			'community' => 'Qualicum Beach',
			'airport' => 'Qualicum Beach Airport',
			'region' => '1',
			'coordinates' => '49\u00b020\u203214\u2033N124\u00b023\u203238\u2033W',
			'runway' => '1086',
			'airline' => '',
			'type' => 'base'
		],
		1 => [
			'id' => 'YAA',
			'community' => 'Anahim Lake',
			'airport' => 'Anahim Lake Airport',
			'region' => '5',
			'coordinates' => '52\u00b027\u203208\u2033N125\u00b018\u203216\u2033W',
			'runway' => '1200',
			'airline' => '',
			'type' => 'dest'
		],
		2 => [
			'id' => 'YAL',
			'community' => 'Alert Bay',
			'airport' => 'Alert Bay Airport',
			'region' => '1',
			'coordinates' => '50\u00b034\u203256\u2033N126\u00b054\u203257\u2033W',
			'runway' => '910',
			'airline' => '',
			'type' => 'dest'
		],
		3 => [
			'id' => 'YAZ',
			'community' => 'Tofino',
			'airport' => 'Tofino/Long Beach Airport',
			'region' => '1',
			'coordinates' => '49\u00b004\u203256\u2033N125\u00b046\u203221\u2033W',
			'runway' => '1524',
			'airline' => '',
			'type' => 'dest'
		],
		4 => [
			'id' => 'YBD',
			'community' => 'Bella Coola',
			'airport' => 'Bella Coola Airport',
			'region' => '5',
			'coordinates' => '52\u00b023\u203215\u2033N126\u00b035\u203245\u2033W',
			'runway' => '1280',
			'airline' => '',
			'type' => 'dest'
		]
	];

	// Constructor
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
	 * Retrieves a single airport, null if not found.
	 * 
	 * @param  int 			$which 	the key of an airport
	 * @return array|null        	a airport, or null if none
	 */
	public function get($which)
	{
		return !isset($this->data[$which]) ? null : $this->data[$which];
	}

	/**
	 * Retrieves the full list of airports.
	 * 
	 * @return array the airports
	 */
	public function all()
	{
		return $this->data;
	}
}