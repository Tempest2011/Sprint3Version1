<?php
App::uses('AppController', 'Controller');
//echo $this->Upload->deleteAll('Docente', $id);
/**
 * Docentes Controller
 *
 * @property Docente $Docente
 * @property PaginatorComponent $Paginator
 */
class DocentesController extends AppController {

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
		$this->Docente->recursive = 0;
		$this->set('docentes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Docente->exists($id)) {
			throw new NotFoundException(__('Invalid docente'));
		}
		$options = array('conditions' => array('Docente.' . $this->Docente->primaryKey => $id));
		$this->set('docente', $this->Docente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Docente->create();
			if ($this->Docente->save($this->request->data)) {
				$this->Session->setFlash(__('The docente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The docente could not be saved. Please, try again.'));
			}
		}
		$users = $this->Docente->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Docente->exists($id)) {
			throw new NotFoundException(__('Invalid docente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Docente->save($this->request->data)) {
				$this->Session->setFlash(__('The docente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The docente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Docente.' . $this->Docente->primaryKey => $id));
			$this->request->data = $this->Docente->find('first', $options);
		}
		$users = $this->Docente->User->find('list');
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
		echo $this->Upload->deleteAll('Docente', $id);
		$this->Docente->id = $id;
		if (!$this->Docente->exists()) {
			throw new NotFoundException(__('Invalid docente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Docente->delete()) {
			$this->Session->setFlash(__('The docente has been deleted.'));
		} else {
			$this->Session->setFlash(__('The docente could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
	public function index2(){
		//echo $this->request->params['pass'][0].'ID EMPRESA DESDE DOCENTES';
		//if ($this->request->is('post')) {
			//if (!empty($this->request->data)) {
				$this->Docente->recursive = 0;
				$this->set('docentes', $this->Paginator->paginate());
				//$this->Docente->set($this->request->data);
				//echo $this->data['Docente']['doc'];
			//}
		//}
		
		if ($this->request->is('post')) {
			if (!empty($this->request->data)) {
				//debug($this->request->data);	
				$this->Docente->set($this->request->data);
				echo $this->data['Docente']['doc'];
				$this->redirect(array(
						'controller' => 'docentestudiantes',
						'action' => 'add2',
						$this->data['Docente']['doc'])
					);
			}		
		}
		
	}
	
	public function add2(){
		if ($this->request->is('post')) {
			if (!empty($this->request->data)) {
				$this->Docente->set($this->request->data);
				echo $this->data['Docente']['doc'];
			}
			
			//$i = 0;
			/*for($i = 0; i<2; $i++){
				echo $this->data['Docentes']['id'];
			}*/
			
			debug($this->request->data);	
		}
		
	}
	
	public function add3($id){
		if ($this->request->is('post')) {
			$this->Docente->set($this->request->data);
			echo $this->data['Docente']['doc'];
			$i = 0;
			/*for($i = 0; i<2; $i++){
				echo $this->data['Docentes']['id'];
			}*/
			
			debug($this->request->data);	
		}
	}
	
	public function beforeFilter() {
		parent::beforeFilter();
		//$this->Auth->allow('index', 'view');
	}
	
}
