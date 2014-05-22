<?php
App::uses('AppController', 'Controller');
/**
 * Metodologiaempresas Controller
 *
 * @property Metodologiaempresa $Metodologiaempresa
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MetodologiaempresasController extends AppController {

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
		$this->Metodologiaempresa->recursive = 0;
		$this->set('metodologiaempresas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Metodologiaempresa->exists($id)) {
			throw new NotFoundException(__('Invalid metodologiaempresa'));
		}
		$options = array('conditions' => array('Metodologiaempresa.' . $this->Metodologiaempresa->primaryKey => $id));
		$this->set('metodologiaempresa', $this->Metodologiaempresa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Metodologiaempresa->create();
			if ($this->Metodologiaempresa->save($this->request->data)) {
				$this->Session->setFlash(__('The metodologiaempresa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The metodologiaempresa could not be saved. Please, try again.'));
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
		if (!$this->Metodologiaempresa->exists($id)) {
			throw new NotFoundException(__('Invalid metodologiaempresa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Metodologiaempresa->save($this->request->data)) {
				$this->Session->setFlash(__('The metodologiaempresa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The metodologiaempresa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Metodologiaempresa.' . $this->Metodologiaempresa->primaryKey => $id));
			$this->request->data = $this->Metodologiaempresa->find('first', $options);
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
		$this->Metodologiaempresa->id = $id;
		if (!$this->Metodologiaempresa->exists()) {
			throw new NotFoundException(__('Invalid metodologiaempresa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Metodologiaempresa->delete()) {
			$this->Session->setFlash(__('The metodologiaempresa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The metodologiaempresa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
