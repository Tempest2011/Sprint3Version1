<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	//var $rid;
	var $curruser;
	public $components = array('DebugKit.Toolbar','AjaxMultiUpload.Upload','Auth' => array(
			'authError' => 'No tienes permiso para acceder a esa pagina',
			'authorize' => array(
                'Actions' => array('actionPath' => 'controllers')
            )),'Session', 'Acl');
	
	public $helpers = array('Html', 'Form', 'Session','Js');
	
	/*public function isAuthorized($user){
		return true;
	}*/
	
	//'authorize' => array('Controller')
	
	public function beforeFilter(){
		//$this->Auth->allow('display', 'login', 'logout');
		$this->Auth->allow('display');
		//$this->Auth->allow();
		/*$this->Auth->loginAction = array(
          'controller' => 'users',
          'action' => 'login'
        );*/
        $this->Auth->logoutRedirect = array(
          'controller' => 'pages',
          'action' => 'display', 'home'
        );
        $this->Auth->loginRedirect = array(
          'controller' => 'pages',
          'action' => 'home'
        );
		
			$this->Auth->unauthorizedRedirect = array(
			  'controller' => 'pages',
			  'action' => 'home'
			);
		//$this->Auth->allow('display');		
		//$this->Auth->allow('index', 'view', 'display', 'upload');			
		//$this->Auth->deny('add');
		$this->set('logged_in', $this->Auth->loggedIn());
		$this->set('current_user', $this->Auth->user());
		$this->set('company', 12);
		//$curruser = $this->Auth->user();
		
		/*if($this->set('current_user', $this->Auth->user())){
			//echo 'jjjjjjjjjj';
			//if($curruser['role_id'] == 2){
			//echo 'EMPRESA LOGIN';
			//$options = array('conditions' => array('Empresa.user_id'=>$curruser['id']));
			//$res = $this->User->find('first', $options);
			//print_r($res);
			$this->set('company', 12);
			//}
		}*/
		
		
	}
}

