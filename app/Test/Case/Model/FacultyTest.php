<?php
App::uses('Faculty', 'Model');

/**
 * Faculty Test Case
 */
class FacultyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.faculty',
		'app.course',
		'app.user',
		'app.role',
		'app.name_prefix',
		'app.courses_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Faculty = ClassRegistry::init('Faculty');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Faculty);

		parent::tearDown();
	}

}
