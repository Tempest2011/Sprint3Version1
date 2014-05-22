<?php
/**
 * TablalogFixture
 *
 */
class TablalogFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'tabla' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 35, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha' => array('type' => 'date', 'null' => true, 'default' => null),
		'pid' => array('type' => 'integer', 'null' => true, 'default' => null),
		'datoviejo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'datonuevo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'operacion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'user_id'), 'unique' => 1),
			'fk_tablalogs_users1_idx' => array('column' => 'user_id', 'unique' => 0)
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
			'tabla' => 'Lorem ipsum dolor sit amet',
			'fecha' => '2014-05-12',
			'pid' => 1,
			'datoviejo' => 'Lorem ipsum dolor sit amet',
			'datonuevo' => 'Lorem ipsum dolor sit amet',
			'operacion' => 'Lorem ipsum dolor ',
			'user_id' => 1
		),
	);

}
