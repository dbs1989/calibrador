<?php
App::uses('Measurement', 'Model');

/**
 * Measurement Test Case
 *
 */
class MeasurementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.measurement',
		'app.calibration',
		'app.equipment',
		'app.typeequipment',
		'app.coefficient',
		'app.user',
		'app.group',
		'app.physicalquantity',
		'app.typeincrement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Measurement = ClassRegistry::init('Measurement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Measurement);

		parent::tearDown();
	}

}
