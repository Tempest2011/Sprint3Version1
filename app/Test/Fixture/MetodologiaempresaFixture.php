<?php
/**
 * MetodologiaempresaFixture
 *
 */
class MetodologiaempresaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'empresa_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'metodologia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('empresa_id', 'metodologia_id'), 'unique' => 1),
			'fk_metodologiaempresa_metodologia1_idx' => array('column' => 'metodologia_id', 'unique' => 0)
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
			'metodologia_id' => 1
		),
	);

}
