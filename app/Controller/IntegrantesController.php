	<?php
App::uses('AppController', 'Controller');
/**
 * Integrantes Controller
 *
 * @property Integrante $Integrante
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class IntegrantesController extends AppController {
	var $uses = array('Empresa', 'User', 'Estudiante', 'Docente');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Integrante->recursive = 0;
		$this->set('integrantes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Integrante->exists($id)) {
			throw new NotFoundException(__('Invalid integrante'));
		}
		$options = array('conditions' => array('Integrante.' . $this->Integrante->primaryKey => $id));
		$this->set('integrante', $this->Integrante->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Integrante->create();
			if ($this->Integrante->save($this->request->data)) {
				$this->Session->setFlash(__('The integrante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The integrante could not be saved. Please, try again.'));
			}
		}
		$empresas = $this->Integrante->Empresa->find('list');
		$estudiantes = $this->Integrante->Estudiante->find('list');
		$this->set(compact('empresas', 'estudiantes'));
	}
	
	public function agregar($id =  null){
		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Integrante->exists($id)) {
			throw new NotFoundException(__('Invalid integrante'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Integrante->save($this->request->data)) {
				$this->Session->setFlash(__('The integrante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The integrante could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Integrante.' . $this->Integrante->primaryKey => $id));
			$this->request->data = $this->Integrante->find('first', $options);
		}
		$empresas = $this->Integrante->Empresa->find('list');
		$estudiantes = $this->Integrante->Estudiante->find('list');
		$this->set(compact('empresas', 'estudiantes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Integrante->id = $id;
		if (!$this->Integrante->exists()) {
			throw new NotFoundException(__('Invalid integrante'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Integrante->delete()) {
			$this->Session->setFlash(__('The integrante has been deleted.'));
		} else {
			$this->Session->setFlash(__('The integrante could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
