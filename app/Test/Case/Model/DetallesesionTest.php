<?php
App::uses('Detallesesion', 'Model');

/**
 * Detallesesion Test Case
 *
 */
class DetallesesionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detallesesion',
		'app.user',
		'app.role',
		'app.docente',
		'app.anuncio',
		'app.docentestudiante',
		'app.evaluacion',
		'app.telefono',
		'app.documento',
		'app.empresa',
		'app.integrante',
		'app.metodologiaempresa',
		'app.foro',
		'app.tablalog',
		'app.usuariorol'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Detallesesion = ClassRegistry::init('Detallesesion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Detallesesion);

		parent::tearDown();
	}

}
