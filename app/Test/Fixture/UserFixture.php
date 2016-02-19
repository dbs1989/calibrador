<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'login' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20),
		'dateregister' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'deleted' => array('type' => 'boolean', 'null' => false, 'default' => false),
		'group_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'usuario_login_key' => array('unique' => true, 'column' => 'login')
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
			'login' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor ',
			'dateregister' => '2016-02-17 11:39:08',
			'name' => 'Lorem ipsum dolor sit amet',
			'deleted' => 1,
			'group_id' => 1
		),
	);

}
