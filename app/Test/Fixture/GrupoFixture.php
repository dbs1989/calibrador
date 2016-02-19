<?php
/**
 * GrupoFixture
 *
 */
class GrupoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'descricao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
		'excluido' => array('type' => 'boolean', 'null' => true, 'default' => false),
		'datacriacao' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'grupo_descricao_key' => array('unique' => true, 'column' => 'descricao')
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
			'descricao' => 'Lorem ipsum dolor sit amet',
			'excluido' => 1,
			'datacriacao' => '2016-02-17 06:59:20'
		),
	);

}
