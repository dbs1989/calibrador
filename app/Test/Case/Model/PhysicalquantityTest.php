<?php
App::uses('Physicalquantity', 'Model');

/**
 * Physicalquantity Test Case
 *
 */
class PhysicalquantityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.physicalquantity',
		'app.calibration',
		'app.equipment',
		'app.typeequipment',
		'app.coefficient',
		'app.user',
		'app.group',
		'app.typeincrement',
		'app.measurement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Physicalquantity = ClassRegistry::init('Physicalquantity');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Physicalquantity);

		parent::tearDown();
	}

}
