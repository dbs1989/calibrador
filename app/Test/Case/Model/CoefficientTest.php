<?php
App::uses('Coefficient', 'Model');

/**
 * Coefficient Test Case
 *
 */
class CoefficientTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.coefficient',
		'app.equipment',
		'app.typeequipment',
		'app.calibration',
		'app.user',
		'app.group',
		'app.physicalquantity',
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
		$this->Coefficient = ClassRegistry::init('Coefficient');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Coefficient);

		parent::tearDown();
	}

}
