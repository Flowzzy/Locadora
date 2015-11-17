<?php
App::uses('ClientsCopy', 'Model');

/**
 * ClientsCopy Test Case
 *
 */
class ClientsCopyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.clients_copy',
		'app.copy',
		'app.films',
		'app.cstate',
		'app.client',
		'app.rstate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClientsCopy = ClassRegistry::init('ClientsCopy');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClientsCopy);

		parent::tearDown();
	}

}
