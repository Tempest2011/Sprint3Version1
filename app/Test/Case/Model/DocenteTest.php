<?php
App::uses('Docente', 'Model');

/**
 * Docente Test Case
 *
 */
class DocenteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.docente',
		'app.user',
		'app.detallesesion',
		'app.documento',
		'app.empresa',
		'app.integrante',
		'app.metodologiaempresa',
		'app.foro',
		'app.tablalog',
		'app.usuariorol',
		'app.anuncio',
		'app.docentestudiante',
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
		$this->Docente = ClassRegistry::init('Docente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Docente);

		parent::tearDown();
	}

}
