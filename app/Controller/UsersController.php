<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {
	var $helpers = array('Session', 'Form', 'Html');
	var $us;

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
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		/*if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}*/
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				//return $this->redirect(array('action' => 'index'));
				return $this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	/*if ($this->Session->read('Auth.User')) {
        $this->Session->setFlash('You are logged in!');
        return $this->redirect('/');
    }*/
	public function login(){
		if($this->request->is('post')){			
			if($this->Auth->login()){
				/*$us = $this->curruser;
				echo  $us .'USER';*/
				$this->Session->setFlash('Ingresaste con exito!');	
				//if($this->set('current_user', $this->Auth->user())){
					
					/*if($curruser['role_id'] == 2){
						echo 'EMPRESA LOGIN '.$curruser['role_id'];
						$options = array('conditions' => array('User.id'=>'Empresa.user_id'));
						$res = $this->Docentestudiante->find('first', $options);
						print_r($res);
						$this->set('emp_id');
					}
					else{
						echo 'NOOO';
					}*/
				//}	
				/*else{
					echo 'SEGUNDO NOOO';	
				}*/		
				
				$this->redirect($this->Auth->redirect());
				//$this->redirect(array(
//						'controller' => 'empresas',
//						'action' => 'index')
//					);
			}
			else{
				$this->Session->setFlash('Tu password/username es incorrecto');
			}
		}
		
	}
	public function logout(){
		//$this->Auth->logout();
		$this->redirect($this->Auth->logout());
	}
	
	public function beforeFilter(){
		parent::beforeFilter();
		//$this->Auth->allow('initDB');
		//$this->Auth->allow();
	}
	
	public function isAuthorized($user){
		if($user['role_id'] == 1){
			return true;	
		}
		//$this->action == 'edit'
		if(in_array($this->action, array('edit', 'delete'))){
			//params, parametros pasados atraves del url	
			if($user['id'] != $this->request->params['pass'][0]){
				return false;
			}
		}
		return true;		
	}
	
	public function initDB() {
    $group = $this->User->Role;

    // Allow admins to everything
	//ADMINISTRADOR
    $group->id = 1;
    $this->Acl->allow($group, 'controllers');

    // allow managers to posts and widgets
	//EMPRESAS
    $group->id = 2;
    $this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Empresas');
    $this->Acl->allow($group, 'controllers/Fundempresas');

    // allow users to only add and edit on posts and widgets
	//PUBLICO
    $group->id = 3;
    $this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Empresas/add');
    $this->Acl->allow($group, 'controllers/Fundempresas/edit');
    $this->Acl->allow($group, 'controllers/Users/add');
    $this->Acl->allow($group, 'controllers/Empresas/edit');

    // allow basic users to log out
    $this->Acl->allow($group, 'controllers/Users/logout');

    // we add an exit to avoid an ugly "missing views" error message
    echo "all done";
    exit;
}
	
	public function admin_logout(){
		
	}
	
	public function admin_index(){
		
	}
}
