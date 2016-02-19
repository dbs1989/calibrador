<?php
/**
 * GroupFixture
 *
 */
class GroupFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'description' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
		'deleted' => array('type' => 'boolean', 'null' => true, 'default' => false),
		'dateregister' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'grupo_descricao_key' => array('unique' => true, 'column' => 'description')
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
			'description' => 'Lorem ipsum dolor sit amet',
			'deleted' => 1,
			'dateregister' => '2016-02-17 11:37:48'
		),
	);

}
