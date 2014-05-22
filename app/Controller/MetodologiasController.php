<?php
App::uses('AppController', 'Controller');
/**
 * Metodologias Controller
 *
 * @property Metodologia $Metodologia
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MetodologiasController extends AppController {

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
		$this->Metodologia->recursive = 0;
		$this->set('metodologias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Metodologia->exists($id)) {
			throw new NotFoundException(__('Invalid metodologia'));
		}
		$options = array('conditions' => array('Metodologia.' . $this->Metodologia->primaryKey => $id));
		$this->set('metodologia', $this->Metodologia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Metodologia->create();
			if ($this->Metodologia->save($this->request->data)) {
				$this->Session->setFlash(__('The metodologia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The metodologia could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Metodologia->exists($id)) {
			throw new NotFoundException(__('Invalid metodologia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Metodologia->save($this->request->data)) {
				$this->Session->setFlash(__('The metodologia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The metodologia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Metodologia.' . $this->Metodologia->primaryKey => $id));
			$this->request->data = $this->Metodologia->find('first', $options);
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
		$this->Metodologia->id = $id;
		if (!$this->Metodologia->exists()) {
			throw new NotFoundException(__('Invalid metodologia'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Metodologia->delete()) {
			$this->Session->setFlash(__('The metodologia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The metodologia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
