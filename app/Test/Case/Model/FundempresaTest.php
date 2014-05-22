<?php
App::uses('Fundempresa', 'Model');

/**
 * Fundempresa Test Case
 *
 */
class FundempresaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fundempresa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Fundempresa = ClassRegistry::init('Fundempresa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fundempresa);

		parent::tearDown();
	}

}
