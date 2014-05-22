<?php
/**
 * DetallesesionFixture
 *
 */
class DetallesesionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'fechainicio' => array('type' => 'date', 'null' => true, 'default' => null),
		'fechafin' => array('type' => 'date', 'null' => true, 'default' => null),
		'pid' => array('type' => 'integer', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'user_id'), 'unique' => 1),
			'fk_detallesesions_users1_idx' => array('column' => 'user_id', 'unique' => 0)
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
			'fechainicio' => '2014-05-12',
			'fechafin' => '2014-05-12',
			'pid' => 1,
			'user_id' => 1
		),
	);

}
