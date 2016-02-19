<?php
/**
 * CoefficientFixture
 *
 */
class CoefficientFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => 'nextval((\'calibrador.coefficient_id_seq\'', 'length' => 11, 'key' => 'primary'),
		'value' => array('type' => 'float', 'null' => true, 'default' => null),
		'equipment_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'deleted' => array('type' => 'boolean', 'null' => true, 'default' => false),
		'dateregister' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'value' => 1,
			'equipment_id' => 1,
			'deleted' => 1,
			'dateregister' => '2016-02-18 06:35:52'
		),
	);

}
