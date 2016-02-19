<?php
/**
 * EquipmentFixture
 *
 */
class EquipmentFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'equipments';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => 'nextval((\'calibrador.equipment_id_seq\'', 'length' => 11, 'key' => 'primary'),
		'brand' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'model' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'measurementuncertainty' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
		'identification' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'typeequipment_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'dateregister' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'deleted' => array('type' => 'boolean', 'null' => true, 'default' => false),
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
			'brand' => 'Lorem ipsum dolor sit amet',
			'model' => 'Lorem ipsum dolor sit amet',
			'measurementuncertainty' => 'Lorem ipsum dolor ',
			'identification' => 'Lorem ipsum dolor sit amet',
			'typeequipment_id' => 1,
			'dateregister' => '2016-02-18 06:36:57',
			'deleted' => 1
		),
	);

}
