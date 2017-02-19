<?php
App::uses('DoctorSchedule', 'Model');

/**
 * DoctorSchedule Test Case
 *
 */
class DoctorScheduleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.doctor_schedule',
		'app.doctor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DoctorSchedule = ClassRegistry::init('DoctorSchedule');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DoctorSchedule);

		parent::tearDown();
	}

}
