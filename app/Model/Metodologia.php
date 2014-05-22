<?php
App::uses('AppModel', 'Model');
/**
 * Metodologia Model
 *
 * @property Metienerol $Metienerol
 * @property Metodologiaempresa $Metodologiaempresa
 */
class Metodologia extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Metienerol' => array(
			'className' => 'Metienerol',
			'foreignKey' => 'metodologia_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Metodologiaempresa' => array(
			'className' => 'Metodologiaempresa',
			'foreignKey' => 'metodologia_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
