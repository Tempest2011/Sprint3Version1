<?php
App::uses('AppModel', 'Model');
/**
 * Criterio Model
 *
 * @property Evaluacion $Evaluacion
 * @property EvaluacionDocente $EvaluacionDocente
 */
class Criterio extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'evaluacion_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'evaluacion_docente_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Evaluacion' => array(
			'className' => 'Evaluacion',
			'foreignKey' => 'evaluacion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EvaluacionDocente' => array(
			'className' => 'EvaluacionDocente',
			'foreignKey' => 'evaluacion_docente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
