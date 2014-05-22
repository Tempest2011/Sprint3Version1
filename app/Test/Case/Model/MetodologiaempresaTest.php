<?php
App::uses('Metodologiaempresa', 'Model');

/**
 * Metodologiaempresa Test Case
 *
 */
class MetodologiaempresaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.metodologiaempresa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Metodologiaempresa = ClassRegistry::init('Metodologiaempresa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Metodologiaempresa);

		parent::tearDown();
	}

}
