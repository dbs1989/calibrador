<?php
App::uses('Typeequipment', 'Model');

/**
 * Typeequipment Test Case
 *
 */
class TypeequipmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.typeequipment',
		'app.equipment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Typeequipment = ClassRegistry::init('Typeequipment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Typeequipment);

		parent::tearDown();
	}

}
