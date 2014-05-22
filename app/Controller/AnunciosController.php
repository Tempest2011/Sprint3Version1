<?php
App::uses('AppController', 'Controller');
/**
 * Anuncios Controller
 *
 * @property Anuncio $Anuncio
 * @property PaginatorComponent $Paginator
 */
class AnunciosController extends AppController {

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
		$this->Anuncio->recursive = 0;
		$this->set('anuncios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Anuncio->exists($id)) {
			throw new NotFoundException(__('Invalid anuncio'));
		}
		$options = array('conditions' => array('Anuncio.' . $this->Anuncio->primaryKey => $id));
		$this->set('anuncio', $this->Anuncio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Anuncio->create();
			if ($this->Anuncio->save($this->request->data)) {
				$this->Session->setFlash(__('The anuncio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The anuncio could not be saved. Please, try again.'));
			}
		}
		$docentes = $this->Anuncio->Docente->find('list');
		$this->set(compact('docentes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Anuncio->exists($id)) {
			throw new NotFoundException(__('Invalid anuncio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Anuncio->save($this->request->data)) {
				$this->Session->setFlash(__('The anuncio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The anuncio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Anuncio.' . $this->Anuncio->primaryKey => $id));
			$this->request->data = $this->Anuncio->find('first', $options);
		}
		$docentes = $this->Anuncio->Docente->find('list');
		$this->set(compact('docentes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Anuncio->id = $id;
		if (!$this->Anuncio->exists()) {
			throw new NotFoundException(__('Invalid anuncio'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Anuncio->delete()) {
			$this->Session->setFlash(__('The anuncio has been deleted.'));
		} else {
			$this->Session->setFlash(__('The anuncio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function beforeFilter() {
    	parent::beforeFilter();
    	//$this->Auth->allow('index', 'add', 'view');
	}
	
}
