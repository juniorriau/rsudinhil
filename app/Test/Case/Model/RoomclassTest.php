<?php
App::uses('Roomclass', 'Model');

/**
 * Roomclass Test Case
 *
 */
class RoomclassTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.roomclass',
		'app.room'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Roomclass = ClassRegistry::init('Roomclass');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Roomclass);

		parent::tearDown();
	}

}
