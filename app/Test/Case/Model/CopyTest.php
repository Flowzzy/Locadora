<?php
App::uses('Copy', 'Model');

/**
 * Copy Test Case
 *
 */
class CopyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.copy',
		'app.films',
		'app.cstate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Copy = ClassRegistry::init('Copy');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Copy);

		parent::tearDown();
	}

}
