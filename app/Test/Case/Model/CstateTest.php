<?php
App::uses('Cstate', 'Model');

/**
 * Cstate Test Case
 *
 */
class CstateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cstate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cstate = ClassRegistry::init('Cstate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cstate);

		parent::tearDown();
	}

}
