<?php
App::uses('AppController', 'Controller');
/**
 * Estudiantes Controller
 *
 * @property Estudiante $Estudiante
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EstudiantesController extends AppController {
	var $name = 'Estudiante'; 
	var $uses = array('Empresa', 'User');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

}
