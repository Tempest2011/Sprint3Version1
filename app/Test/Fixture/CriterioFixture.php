<?php
/**
 * CriterioFixture
 *
 */
class CriterioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'evaluacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'evaluacion_docente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'evaluacion_id', 'evaluacion_docente_id'), 'unique' => 1),
			'fk_criterios_evaluacions1_idx' => array('column' => array('evaluacion_id', 'evaluacion_docente_id'), 'unique' => 0)
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
			'id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'evaluacion_id' => 1,
			'evaluacion_docente_id' => 1
		),
	);

}
