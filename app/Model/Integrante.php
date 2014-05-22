<?php
App::uses('AppModel', 'Model');
/**
 * Integrante Model
 *
 * @property Empresa $Empresa
 * @property Estudiante $Estudiante
 */
class Integrante extends AppModel {
	var $name = 'Integrante';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'empresa_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Empresa' => array(
			'className' => 'Empresa',
			'foreignKey' => 'empresa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Estudiante' => array(
			'className' => 'Estudiante',
			'foreignKey' => 'estudiante_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
