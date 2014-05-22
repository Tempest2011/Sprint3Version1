<?php
App::uses('Empresa', 'Model');

/**
 * Empresa Test Case
 *
 */
class EmpresaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.empresa',
		'app.user',
		'app.detallesesion',
		'app.docente',
		'app.documento',
		'app.foro',
		'app.tablalog',
		'app.usuariorol',
		'app.integrante',
		'app.metodologiaempresa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Empresa = ClassRegistry::init('Empresa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Empresa);

		parent::tearDown();
	}

}
