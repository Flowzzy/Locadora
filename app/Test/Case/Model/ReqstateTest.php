<?php
App::uses('Reqstate', 'Model');

/**
 * Reqstate Test Case
 *
 */
class ReqstateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.reqstate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Reqstate = ClassRegistry::init('Reqstate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Reqstate);

		parent::tearDown();
	}

}
