<?php
/**
 * IntegranteFixture
 *
 */
class IntegranteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'empresa_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'estudiante_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('empresa_id', 'estudiante_id'), 'unique' => 1),
			'fk_integrantes_estudiantes1_idx' => array('column' => 'estudiante_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'empresa_id' => 1,
			'estudiante_id' => 1
		),
	);

}
