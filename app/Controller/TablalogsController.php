<?php
App::uses('AppController', 'Controller');
/**
 * Tablalogs Controller
 *
 * @property Tablalog $Tablalog
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TablalogsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

}
