<?php
App::uses('Estudiante', 'Model');

/**
 * Estudiante Test Case
 *
 */
class EstudianteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.estudiante',
		'app.asignacion',
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
		'app.telefono'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Estudiante = ClassRegistry::init('Estudiante');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Estudiante);

		parent::tearDown();
	}

}
