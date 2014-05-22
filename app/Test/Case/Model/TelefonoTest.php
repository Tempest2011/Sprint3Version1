<?php
App::uses('Telefono', 'Model');

/**
 * Telefono Test Case
 *
 */
class TelefonoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.telefono',
		'app.docente',
		'app.user',
		'app.role',
		'app.detallesesion',
		'app.documento',
		'app.empresa',
		'app.integrante',
		'app.estudiante',
		'app.asignacion',
		'app.docentestudiante',
		'app.metodologiaempresa',
		'app.foro',
		'app.tablalog',
		'app.usuariorol',
		'app.anuncio',
		'app.evaluacion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Telefono = ClassRegistry::init('Telefono');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Telefono);

		parent::tearDown();
	}

}
