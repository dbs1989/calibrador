<?php
/**
 * MeasurementFixture
 *
 */
class MeasurementFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'referencetemperature' => array('type' => 'float', 'null' => true, 'default' => null),
		'measuredtemperature' => array('type' => 'float', 'null' => true, 'default' => null),
		'deleted' => array('type' => 'boolean', 'null' => true, 'default' => false),
		'dateregister' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'calibration_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'referencetemperature' => 1,
			'measuredtemperature' => 1,
			'deleted' => 1,
			'dateregister' => '2016-02-18 06:37:35',
			'calibration_id' => 1
		),
	);

}
