<?php
App::uses('Tablalog', 'Model');

/**
 * Tablalog Test Case
 *
 */
class TablalogTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tablalog',
		'app.user',
		'app.role',
		'app.detallesesion',
		'app.docente',
		'app.anuncio',
		'app.docentestudiante',
		'app.estudiante',
		'app.asignacion',
		'app.integrante',
		'app.empresa',
		'app.metodologiaempresa',
		'app.evaluacion',
		'app.telefono',
		'app.documento',
		'app.foro',
		'app.usuariorol'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tablalog = ClassRegistry::init('Tablalog');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tablalog);

		parent::tearDown();
	}

}
