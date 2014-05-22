<?php
App::uses('AppController', 'Controller');
/**
 * Empresas Controller
 *
 * @property Empresa $Empresa
 * @property PaginatorComponent $Paginator
 */
class EmpresasController extends AppController {
	//var $name = 'Empresas'; 
	var $uses = array('Empresa', 'User');
	var $helpers = array('Session', 'Form', 'Html');
	//var $rid;

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Empresa->recursive = 0;
		$this->set('empresas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Empresa->exists($id)) {
			throw new NotFoundException(__('Invalid empresa'));
		}
		$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
		$this->set('empresa', $this->Empresa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
 
 
	public function add() {
		//add2();
		//if ($this->request->is('post')) {
			if (!empty($this->request->data)) {
				 
				 //$this->Empresa->create();
				// $res = $this->request->data;
				 //print_r($res);
				 
				 //$usuario = $this->User->saveAssociated($this->request->data);
				
				 //debug($this->User->validationErrors);
				 //debug($this->validationErrors);
				 //$this->User->save($this->request->data);
				 //$this->Empresa->create();
				 //$this->User->Empresa->save($this->request->data);
					//$this->User->saveAssociated($this->request->data);
					//echo 'si';
				 //$this->rid = $this->data['User']['rol_id'];
				 //echo $this->data['User']['rol_id'];
				 //echo $this->rid;;
				 
				 if($this->User->validates()){	
				 
				  	//$this->User->create();
					 //$this->User->saveAssociated($this->request->data);
					 
					//$this->Empresa->create();
					
					
				 	$this->User->set($this->request->data);//cod bueno
					//$emp = $this->data['Empresa']['id'];
					$lastCreated = $this->Empresa->find('first', array(
        				'order' => array('Empresa.id' => 'desc')
   						 ));
						// print_r($lastCreated);
						 //echo $lastCreated['Empresa']['id'].'ID EMPRESA';
				 				 
					 //$this->add2();
					  //echo $rid;
					 
       			//$usuario = $this->User->saveAssociated($this->request->data);
				
					 $this->Session->setFlash(__('valido'));
					/* $this->redirect('/integrantes/agregar');
					 $this->render('/empresas/add2');
					 $this -> viewPath = 'docentes';
					 $this->render('index');
					 $this->redirect('./add2');
					 $this->redirect(array(
						'controller' => 'empresas',
						'action' => 'add2', 
						$this->request->data['User']['rol_id'])
					);*/
					
					/*$this->redirect(array(
						'controller' => 'docentes',
						'action' => 'index2',
						$lastCreated['Empresa']['id'])
					);*/
					
					$this->redirect(array(
						'controller' => 'docentes',
						'action' => 'index2')
					);
					
					}
					else{
					$this->Session->setFlash(__('no valido'));
					}
					
   				
				
				
       			//$usuario = $this->User->saveAssociated($this->request->data);
 			}
			
			/*$this->Empresa->create();
			if ($this->Empresa->save($this->request->data)) {
				$this->Session->setFlash(__('The empresa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empresa could not be saved. Please, try again.'));
			}
		}
		$users = $this->Empresa->User->find('list');
		$this->set(compact('users'));*/
		//}
	}
	
	public function add2($id){
		
		//public function add2($user){
		//$r = $this->rid;
		//echo $this->$user.' IDDDD';
		echo $this->request->params['pass'][0].' PARAMS';
		
		$this->set('roleid', $this->id);
		//$this->create->Docente;
		//$this->Docente->recursive = 0;
		//$this->set('docentes', $this->Paginator->paginate());

		//echo $this->rid.' rol';
		//$this->Estudiante->recursive = 0;
		//$this->set('estudiantes', $this->Paginator->paginate());
		
		//$lista = $this->loadModel('Estudiante');
		//$listas = $this->Estudiante->query("SELECT * FROM estudiantes;");       
            /*$listas = $lista->find('list', array(      
                  'fields' => array('Estudiante.id', 'Estudiante.nombre')
            ));*/
            //$this->set('listas', $listas); 
			/*if ($this->request->is('post')) {
			if (!empty($this->request->data)) {
				 $this->Docente->set($this->request->data);
				 //$this->rid = $this->data['Docente']['rol_id'];
				 echo $this->data['Docente']['id'].' DOOOC';
				 //echo $this->rid;;
				 
			}*/
		//}
		
	}
	
	public function add3(){
		
		
	}
	
	

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Empresa->exists($id)) {
			throw new NotFoundException(__('Invalid empresa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Empresa->save($this->request->data)) {
				$this->Session->setFlash(__('The empresa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empresa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
			$this->request->data = $this->Empresa->find('first', $options);
		}
		$users = $this->Empresa->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Empresa->id = $id;
		if (!$this->Empresa->exists()) {
			throw new NotFoundException(__('Invalid empresa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Empresa->delete()) {
			$this->Session->setFlash(__('The empresa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The empresa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function admin_index(){
		
	}
	
	public function admin_edit(){
		
	}
	
	public function admin_delete(){
		
	}
	
	public function beforeFilter() {
    	parent::beforeFilter();
    //$this->Auth->allow('index', 'view');
	}
	
}
