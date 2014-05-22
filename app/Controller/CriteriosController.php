<?php
App::uses('AppController', 'Controller');
/**
 * Criterios Controller
 *
 * @property Criterio $Criterio
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CriteriosController extends AppController {

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
		$this->Criterio->recursive = 0;
		$this->set('criterios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Criterio->exists($id)) {
			throw new NotFoundException(__('Invalid criterio'));
		}
		$options = array('conditions' => array('Criterio.' . $this->Criterio->primaryKey => $id));
		$this->set('criterio', $this->Criterio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Criterio->create();
			if ($this->Criterio->save($this->request->data)) {
				$this->Session->setFlash(__('The criterio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The criterio could not be saved. Please, try again.'));
			}
		}
		$evaluacions = $this->Criterio->Evaluacion->find('list');
		$evaluacionDocentes = $this->Criterio->EvaluacionDocente->find('list');
		$this->set(compact('evaluacions', 'evaluacionDocentes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Criterio->exists($id)) {
			throw new NotFoundException(__('Invalid criterio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Criterio->save($this->request->data)) {
				$this->Session->setFlash(__('The criterio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The criterio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Criterio.' . $this->Criterio->primaryKey => $id));
			$this->request->data = $this->Criterio->find('first', $options);
		}
		$evaluacions = $this->Criterio->Evaluacion->find('list');
		$evaluacionDocentes = $this->Criterio->EvaluacionDocente->find('list');
		$this->set(compact('evaluacions', 'evaluacionDocentes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Criterio->id = $id;
		if (!$this->Criterio->exists()) {
			throw new NotFoundException(__('Invalid criterio'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Criterio->delete()) {
			$this->Session->setFlash(__('The criterio has been deleted.'));
		} else {
			$this->Session->setFlash(__('The criterio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
