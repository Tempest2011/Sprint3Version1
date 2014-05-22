<?php
App::uses('Docentestudiante', 'Model');

/**
 * Docentestudiante Test Case
 *
 */
class DocentestudianteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.docentestudiante',
		'app.docente',
		'app.user',
		'app.role',
		'app.detallesesion',
		'app.documento',
		'app.empresa',
		'app.integrante',
		'app.metodologiaempresa',
		'app.foro',
		'app.tablalog',
		'app.usuariorol',
		'app.anuncio',
		'app.evaluacion',
		'app.telefono',
		'app.estudiante'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Docentestudiante = ClassRegistry::init('Docentestudiante');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Docentestudiante);

		parent::tearDown();
	}

}
