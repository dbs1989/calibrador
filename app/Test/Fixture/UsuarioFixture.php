<?php
/**
 * UsuarioFixture
 *
 */
class UsuarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'login' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50),
		'senha' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20),
		'datacriacao' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'nome' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'excluido' => array('type' => 'boolean', 'null' => false, 'default' => false),
		'grupo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'senha' => 'Lorem ipsum dolor ',
			'datacriacao' => '2016-02-17 08:44:44',
			'nome' => 'Lorem ipsum dolor sit amet',
			'excluido' => 1,
			'grupo_id' => 1
		),
	);

}
