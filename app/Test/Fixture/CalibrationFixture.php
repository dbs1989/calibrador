<?php
/**
 * CalibrationFixture
 *
 */
class CalibrationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => 'nextval((\'calibrador.calibration_id_seq\'', 'length' => 11, 'key' => 'primary'),
		'equipment_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'dateregister' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'deleted' => array('type' => 'boolean', 'null' => true, 'default' => false),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'physicalquantity_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'valueInitialphysicalquantity' => array('type' => 'float', 'null' => true, 'default' => null),
		'valuefinalphysicalquantity' => array('type' => 'float', 'null' => true, 'default' => null),
		'amountcalibration' => array('type' => 'integer', 'null' => true, 'default' => null),
		'degreepolynomial' => array('type' => 'integer', 'null' => true, 'default' => null),
		'typeincrement_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'valueincrement' => array('type' => 'float', 'null' => true, 'default' => null),
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
			'equipment_id' => 1,
			'dateregister' => '2016-02-18 06:35:17',
			'deleted' => 1,
			'user_id' => 1,
			'physicalquantity_id' => 1,
			'valueInitialphysicalquantity' => 1,
			'valuefinalphysicalquantity' => 1,
			'amountcalibration' => 1,
			'degreepolynomial' => 1,
			'typeincrement_id' => 1,
			'valueincrement' => 1
		),
	);

}
