<?php
App::uses('Calibration', 'Model');

/**
 * Calibration Test Case
 *
 */
class CalibrationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.calibration',
		'app.equipment',
		'app.typeequipment',
		'app.coefficient',
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
		$this->Calibration = ClassRegistry::init('Calibration');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Calibration);

		parent::tearDown();
	}

}
