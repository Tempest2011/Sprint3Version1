<?php
App::uses('Metodologia', 'Model');

/**
 * Metodologia Test Case
 *
 */
class MetodologiaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.metodologia',
		'app.metienerol',
		'app.metodologiaempresa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Metodologia = ClassRegistry::init('Metodologia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Metodologia);

		parent::tearDown();
	}

}
