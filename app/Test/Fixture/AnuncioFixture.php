<?php
/**
 * AnuncioFixture
 *
 */
class AnuncioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechacreacion' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null),
		'fechafin' => array('type' => 'date', 'null' => false, 'default' => null),
		'docente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'docente_id'), 'unique' => 1),
			'fk_Anuncios_docentes1_idx' => array('column' => 'docente_id', 'unique' => 0)
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
			'fechacreacion' => 1399321007,
			'fecha' => '2014-05-05',
			'fechafin' => '2014-05-05',
			'docente_id' => 1
		),
	);

}
