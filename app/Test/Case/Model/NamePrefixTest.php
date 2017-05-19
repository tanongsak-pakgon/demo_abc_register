<?php
App::uses('NamePrefix', 'Model');

/**
 * NamePrefix Test Case
 */
class NamePrefixTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.name_prefix',
		'app.user',
		'app.faculty',
		'app.course',
		'app.courses_user',
		'app.role'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NamePrefix = ClassRegistry::init('NamePrefix');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NamePrefix);

		parent::tearDown();
	}

}
