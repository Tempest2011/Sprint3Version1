<?php
App::uses('AppModel', 'Model');
/**
 * Docentestudiante Model
 *
 * @property Docente $Docente
 * @property Estudiante $Estudiante
 */
class Docentestudiante extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	//public $primaryKey = 'docente_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Docente' => array(
			'className' => 'Docente',
			'foreignKey' => 'docente_id',
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
