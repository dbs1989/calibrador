<?php
App::uses('Typeincrement', 'Model');

/**
 * Typeincrement Test Case
 *
 */
class TypeincrementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.typeincrement',
		'app.calibration',
		'app.equipment',
		'app.typeequipment',
		'app.coefficient',
		'app.user',
		'app.group',
		'app.physicalquantity',
		'app.measurement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Typeincrement = ClassRegistry::init('Typeincrement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Typeincrement);

		parent::tearDown();
	}

}
