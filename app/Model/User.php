<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Role $Role
 * @property Detallesesion $Detallesesion
 * @property Docente $Docente
 * @property Documento $Documento
 * @property Empresa $Empresa
 * @property Foro $Foro
 * @property Tablalog $Tablalog
 * @property Usuariorol $Usuariorol
 */
class User extends AppModel {
	var $name = 'User';
	 public $actsAs = array('Acl' => array('type' => 'requester', 'enabled' => false));
	 
	 public function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        if (isset($this->data['User']['role_id'])) {
            $roleId = $this->data['User']['role_id'];
        } else {
            $roleId = $this->field('role_id');
        }
        if (!$roleId) {
            return null;
        } else {
            return array('Role' => array('id' => $roleId));
        }
    }
	
	public function bindNode($user) {
    	return array('model' => 'Role', 'foreign_key' => $user['User']['role_id']);
	}

public $validate = array(
		'username'=>array(
			'Ingrese su nombre'=>array(
				'rule'=>'notEmpty',
				'message'=>'Por favor ingrese su nombre'
				),
			'El login ya existe'=>array(
				'rule'=>'isUnique',
				'message'=>'El login ya existe')
			),
		'password'=>array(
			'No vacio'=>array(
				'rule'=>'notEmpty',
				'message'=>'Por favor ingrese su password'
			),
			'Comparar passwords'=>array(
				'rule'=> 'matchPasswords',
				'message'=>'Las passwords no  coinciden'
			)
		),
		'password_confirm'=>array(
			'No vacio'=>array(
				'rule'=>'notEmpty',
				'message'=>'Por favor confirme su password'
			)	
		)
		
		);
		
	public function matchPasswords($data){
		if($data['password'] == $this->data['User']['password_confirm']){
			return true;
		}
		$this->invalidate('password_confirm', 'Las passwords no  coinciden');
		return false;
	}




/**
 * Display field
 *
 * @var string
 */
	//public $displayField = 'username';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	
	
	public $hasOne = array(
		'Empresa' => array(
			'className' => 'Empresa',
			'foreignKey' => 'user_id'),
		'Docente' => array(
			'className' => 'Docente')
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Detallesesion' => array(
			'className' => 'Detallesesion',
			'foreignKey' => 'user_id',
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
		'Documento' => array(
			'className' => 'Documento',
			'foreignKey' => 'user_id',
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
		'Foro' => array(
			'className' => 'Foro',
			'foreignKey' => 'user_id',
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
		'Tablalog' => array(
			'className' => 'Tablalog',
			'foreignKey' => 'user_id',
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
		'Usuariorol' => array(
			'className' => 'Usuariorol',
			'foreignKey' => 'user_id',
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
	
	public function beforeSave($options = array()){
		if(isset($this->data['User']['password'])){
			$this->data['User']['password'] =  AuthComponent::password($this->data['User']['password']);
		}
		return true;	
	}

}
