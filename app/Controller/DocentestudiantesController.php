<?php
App::uses('AppController', 'Controller');
/**
 * Docentestudiantes Controller
 *
 * @property Docentestudiante $Docentestudiante
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DocentestudiantesController extends AppController {
	var $rar;
	//var $uses = array('Integrante');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	 //public $paginate = array('limit' => 2, 'maxLimit'=>2);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Docentestudiante->recursive = 0;
		$this->paginate = array(
        'paramType' => 'querystring',
        'limit' => 2,
        'maxLimit' => 2
    );
	//$docs = $this->paginate('Docentestudiante');
	//$this->set('docentestudiantes', $docs);
	
	$this->Paginator->settings = array(
        'Docentestudiante' => array(
            'limit' => 2
        )
    );
	
	
		$this->set('docentestudiantes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Docentestudiante->exists($id)) {
			throw new NotFoundException(__('Invalid docentestudiante'));
		}
		$options = array('conditions' => array('Docentestudiante.' . $this->Docentestudiante->primaryKey => $id));
		$this->set('docentestudiante', $this->Docentestudiante->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Docentestudiante->create();
			if ($this->Docentestudiante->save($this->request->data)) {
				$this->Session->setFlash(__('The docentestudiante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The docentestudiante could not be saved. Please, try again.'));
			}
		}
		$docentes = $this->Docentestudiante->Docente->find('list');
		$estudiantes = $this->Docentestudiante->Estudiante->find('list');
		$this->set(compact('docentes', 'estudiantes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Docentestudiante->exists($id)) {
			throw new NotFoundException(__('Invalid docentestudiante'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Docentestudiante->save($this->request->data)) {
				$this->Session->setFlash(__('The docentestudiante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The docentestudiante could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Docentestudiante.' . $this->Docentestudiante->primaryKey => $id));
			$this->request->data = $this->Docentestudiante->find('first', $options);
		}
		$docentes = $this->Docentestudiante->Docente->find('list');
		$estudiantes = $this->Docentestudiante->Estudiante->find('list');
		$this->set(compact('docentes', 'estudiantes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Docentestudiante->id = $id;
		if (!$this->Docentestudiante->exists()) {
			throw new NotFoundException(__('Invalid docentestudiante'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Docentestudiante->delete()) {
			$this->Session->setFlash(__('The docentestudiante has been deleted.'));
		} else {
			$this->Session->setFlash(__('The docentestudiante could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function add2($id=null){
		$this->set('docid', $this->request->params['pass'][0]);
		$dooc = $this->request->params['pass'][0];
		//echo $this->request->params['pass'][0].' PARAMS';
		//debug($this->request->data);
		//echo $rar.' IIIDDDD';
		//if ($this->request->is('post')) {
			$this->Docentestudiante->set($this->request->data);
			//echo $this->data['Docentestudiantes']['doc'];
			//$rar = $this->data['Docentestudiantes']['doc'];
			
			if ($this->request->is('post')) {
				echo $this->data['Docentestudiante']['text'];
				//echo 'put';
				//$this->clearCache();
				//debug($this->request->data);
				//echo 'post';
				//$ee = $this->buscar($this->request->params['pass'][0]);
				$this->redirect(array(
						'controller' => 'docentestudiantes',
						'action' => 'buscar2',
						$this->request->params['pass'][0],
						$this->data['Docentestudiante']['text'])
					);
				//print_r($ee);
				/*echo $ee['Docentestudiante']['estudiante_id']. 'ESTUD ID';
				$eeii = $ee['Docentestudiante']['estudiante_id'];
				$options = array('conditions' => array('AND'=>array('Docentestudiante.docente_id' => $dooc, 'Docentestudiante.estudiante_id' => $eeii)));
				$this->set('docentestudiantes', '');
			$this->set('docentestudiantes', $this->Docentestudiante->find('first', $options));*/
			
			//$this->render('/docentestudiantes/add2');
				//$this->paginate = array(
        /*'paramType' => 'querystring',
        'limit' => 5,
        'maxLimit' => 5
    );
			
			$this->Paginator->settings = array(
        'Docentestudiante' => array(
            'limit' => 5,
			'conditions' => array('Docentestudiante.docente_id =' => $rar)
        )
    );*/
				//$this->render('/docentestudiantes/buscar');
				//$this->Docentestudiante->set($this->buscar($this->request->params['pass'][0]));
			//echo $this->data['Docentestudiante']['text'];
				/*$this->redirect(array(
						'controller' => 'docentestudiantes',
						'action' => 'add2',
						$this->request->params['pass'][0])
					);*/
			}
			/*$this->buscar($this->request->params['pass'][0]);
			$this->Docentestudiante->set($this->request->data);
			echo $this->data['Docentestudiante']['text'];*/
			//$this->buscar($id);
			//else{
				$rar = $this->request->params['pass'][0];
			//echo $rar.' rar';
			//$rar = 3;
			$this->paginate = array(
        'paramType' => 'querystring',
        'limit' => 5,
        'maxLimit' => 5
    );
			
			$this->Paginator->settings = array(
        'Docentestudiante' => array(
            'limit' => 5 ,
			'conditions' => array('Docentestudiante.docente_id =' => $rar)
        )
    );
			//}
			
	
		/*$this->Paginator->settings = array(
        'Docentestudiante' => array(
            'limit' => 1
        )
    );*/
	$this->set('docentestudiantes', $this->Paginator->paginate('Docentestudiante'));
			//debug($this->Paginator->paginate());
			//$options = array('conditions' => array('Docentestudiante.docente_id' => $rar));
		//$this->set('docentestudiantes', $this->Docentestudiante->find('all', $options));
			
		//}
		
		$this->Docentestudiante->recursive = 0;
		$this->loadModel('Integrante');
		
		$this->set('listaestudiantes', $this->Integrante->find('all'));
	}
	
	public function add3(){
		echo $id.' IIIDDDD';
		if ($this->request->is('post')) {
			$this->Docentestudiantes->set($this->request->data);
			$id =  $this->data['Docentestudiantes']['doc'];
			echo $id.' IIIDDDD';
		/*$options = array('conditions' => array('Docentestudiante.' . $this->Docentestudiante->docente_id => $id));
		$this->set('docentestudiante', $this->Docentestudiante->find('first', $options));	*/
		}
	}
	
	public function buscar($id){
		//echo $this->request->params['pass'][0].' PAR1';
		//echo $this->request->params['pass'][0].' PAR2';
		$d = $this->request->params['pass'][0];
		//echo $d.'PAR1';
		/*$this->paginate = array(
        'paramType' => 'querystring',
        'limit' => 1,
        'maxLimit' => 1
    );*/
		//echo $this->id.' IDIDID';
		
		
			$this->Docentestudiante->set($this->request->data);
			$nom = $this->data['Docentestudiante']['text'];
	/*		$this->Paginator->settings = array(
        'Docentestudiante' => array(
            'limit' => 1,
			'conditions' => array('Docentestudiante.docente_id =' => $d, 'Estudiante.nombre' => $nom)
        )
    );*/
	$options = array('conditions' => array('Estudiante.nombre' => $nom));
	$this->loadModel('Estudiante');
	$est = $this->Estudiante->find('first', $options);
	//print_r($est);
	//echo $est['Estudiante']['id'].' ESTUDIANTE ID';
	$estid = $est['Estudiante']['id'];
		
		if ($this->request->is('post')) {
			
			//echo $this->data['Docentestudiante']['text'].' NOMBRE';
			$this->set('docentestudiantes', $this->Paginator->paginate('Docentestudiante'));
			
			$options = array('conditions' => array('AND'=>array('Docentestudiante.docente_id' => $d, 'Docentestudiante.estudiante_id' => $estid)));
			$res = $this->Docentestudiante->find('first', $options);
			//print_r($res);
		$this->set('docentestudiantes', $this->Docentestudiante->find('first', $options));
		return $res;
		//$this->add2($res, true);
		}
		//echo $this->request->params['pass'][0].' PARAMS';
	}
	
	public function buscar2($id=null, $n=null){
		$this->loadModel('Integrante');
		$this->Integrante->clear();
		$this->Integrante->create();
		if ($this->request->is('post')) {
			$this->Docentestudiante->set($this->request->data);
			//echo $this->data['Docentestudiante']['id2'].'LALA';
			//echo $this->data['Docentestudiante']['id3'].'LALA';
			$this->loadModel('Empresa');
			$lastCreated = $this->Empresa->find('first', array(
        				'order' => array('Empresa.id' => 'desc')
   						 ));
			//echo $lastCreated['Empresa']['id'].'ID EMPRESA DESDE DOCEST';
			$rrr = $this->request->data;
			//print_r($rrr);
			//$this->loadModel('Integrante');
			
			$empreid = $lastCreated['Empresa']['id'];
			$estudid = $this->data['Docentestudiante']['id3'];
			//$data = array($empreid, $estudid);
			//$campos = array('empresa_id', 'estudiante_id');
			//print_r($data).'DATA';
			$datos = array(
    'Integrante'=>array(
        'empresa_id'=>$empreid,
        'estudiante_id'=>$estudid
    )
);			$this->Integrante->create();
				/*if($this->Integrante->save($datos)){
					echo 'si';
				}*/
				$this->Integrante->query("INSERT INTO `integrantes`(`empresa_id`, `estudiante_id`) VALUES(".$empreid.','.$estudid.')');
				
			$this->redirect(array(
						'controller' => 'docentestudiantes',
						'action' => 'add2',
						$this->data['Docentestudiante']['id2'])
					);
			//debug($this->Integrante->validationErrors);
			
		}
		
		$d = $this->request->params['pass'][0];
		//echo $d.'PAR1';
		//echo $n.'nnnn';
		$nom = $n;
		/*$this->paginate = array(
        'paramType' => 'querystring',
        'limit' => 1,
        'maxLimit' => 1
    );*/
		//echo $this->id.' IDIDID';
		
		
			//$this->Docentestudiante->set($this->request->data);
			//$nom = $this->data['Docentestudiante']['text'];
			
			
	
	$options = array('conditions' => array('Estudiante.nombre' => $nom));
	$this->loadModel('Estudiante');
	$this->loadModel('Docente');
	$est = $this->Estudiante->find('first', $options);
	//print_r($est);
	//echo $est['Estudiante']['id'].' ESTUDIANTE ID';
	$estid = $est['Estudiante']['id'];
		
		//if ($this->request->is('post')) {
			
			//echo $this->data['Docentestudiante']['text'].' NOMBRE';
			//$this->set('docentestudiantes', $this->Paginator->paginate('Docentestudiante'));
			
			$this->Paginator->settings = array(
        'Docentestudiante' => array(
            'limit' => 5,
			'conditions' => array('Docentestudiante.docente_id =' => $d, 'Estudiante.nombre' => $nom)
        )
    );
	$this->set('docentestudiantes', $this->Paginator->paginate('Docentestudiante'));
			//$options = array('conditions' => array('AND'=>array('Docentestudiante.docente_id' => $d, 'Docentestudiante.estudiante_id' => $estid)));
			//$options = array('conditions' => array('AND'=>array('Docentestudiante.docente_id' => $d, 'Docentestudiante.estudiante_id' => $estid)));
			//$res = $this->Docentestudiante->find('first', $options);
			//echo $res['Docente']['nombre'].'DOOOCID';
			//print_r($res);
			
		//$this->set('docentestudiantes', $this->Docentestudiante->find('first', $options));
		//print_r($res);
		//$this->set('docentestudiantes', $this->Paginator->paginate());
		//return $res;
		//$this->add2($res, true);
		//}
		
		
		
	}
	
	
	
}
