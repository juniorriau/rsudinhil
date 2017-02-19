<?php
App::uses('RoomCategory', 'Model');

/**
 * RoomCategory Test Case
 *
 */
class RoomCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.room_category',
		'app.room',
		'app.roomclass'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RoomCategory = ClassRegistry::init('RoomCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RoomCategory);

		parent::tearDown();
	}

}
