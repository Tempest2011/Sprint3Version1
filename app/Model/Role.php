<?php
App::uses('AppModel', 'Model');
/**
 * Role Model
 *
 * @property User $User
 */
class Role extends AppModel {
	public $actsAs = array('Acl' => array('type' => 'requester'));
	
	public function parentNode() {
        return null;
    }

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'role';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'role' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'role_id',
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
