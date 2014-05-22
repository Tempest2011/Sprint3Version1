<?php
App::uses('Integrante', 'Model');

/**
 * Integrante Test Case
 *
 */
class IntegranteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.integrante',
		'app.empresa',
		'app.user',
		'app.role',
		'app.detallesesion',
		'app.docente',
		'app.anuncio',
		'app.docentestudiante',
		'app.estudiante',
		'app.asignacion',
		'app.evaluacion',
		'app.telefono',
		'app.documento',
		'app.foro',
		'app.tablalog',
		'app.usuariorol',
		'app.metodologiaempresa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Integrante = ClassRegistry::init('Integrante');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Integrante);

		parent::tearDown();
	}

}
