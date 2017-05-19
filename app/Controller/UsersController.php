<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

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
		//die("test");
		$paginate = array();
		$conditions = array();
		$order = array('User.first_name' => 'ASC', 'User.last_name' => 'ASC', 'created' => 'ASC');
		if (!empty($this->data)) {
			//Find by username
			if (!empty($this->data['Search']['username'])) {
				$conditions[] = array('LOWER(User.username) ILIKE' => '%' . strtolower($this->data['Search']['username']) . '%');
			}			
			//Find by username
			if (!empty($this->data['Search']['name'])) {
				$conditions['OR'][] = array('LOWER(User.first_name) ILIKE' => '%' . $this->data['Search']['name'] . '%');
				$conditions['OR'][] = array('LOWER(User.last_name) ILIKE' => '%' . $this->data['Search']['name'] . '%');
				$conditions['OR'][] = array("CONCAT(User.first_name,' ',User.last_name) ILIKE '%{$this->data['Search']['name']}%'");
			}
			//Find by email
			if (!empty($this->data['Search']['emial'])) {
				$conditions[] = array('LOWER(User.email) ILIKE' => '%' . $this->data['Search']['emial'] . '%');
			}
			//Find by phone
			if (!empty($this->data['Search']['phone_no'])) {
				$conditions[] = array('LOWER(User.mobile_phone) ILIKE' => '%' . $this->data['Search']['mobile_phone'] . '%');
			}
			//Find by role_id
			if (!empty($this->data['Search']['role_id'])) {
				$conditions[] = array('User.role_id' => $this->data['Search']['role_id']);
			}
			
		}
		$paginate = array(
				'User' => array(
						'conditions' => $conditions,
						'order' => $order,
						'limit' => 20
				));
		$this->paginate = $paginate;
		$this->set('users', $this->Paginator->paginate('User'));
// 		$this->User->recursive = 0;
// 		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		/*
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
		$faculties = $this->User->Faculty->find('list');
		$roles = $this->User->Role->find('list');
		$namePrefixes = $this->User->NamePrefix->find('list');
		$courses = $this->User->Course->find('list');
		$this->set(compact('faculties', 'roles', 'namePrefixes', 'courses'));
	*/
		if ($this->request->is('post')) {
			$condition = array('User.username' => $this->requease->data['User']['username']);
			if (empty($this->User->hasAny($condition))) {
				$resultOK = array();
				$file_path = "";
				//Reader from file attachment file
				if (!empty($this->data['User']['picture_path']['name'])) {
					$file_path = 'uploadfile/img';
					$resultOK = $this->uploadFiles($file_path, $this->data['User']['picture_path']);
					if (isset($resultOK['errors'])) {
						$this->Session->setFlash(__("{$resultOK['errors'][0]}. Please, try again.", true));
						$this->redirect($this->referer());
					}
				}
				$this->request->data['User']['picture_path'] = $file_path .'/'. $resultOK['upfilename'][0];
				$this->request->data['User']['status'] = 'A';
				$this->User->create();
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('The user has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
				}
			} else {
				$this->Session->setFlash(__("The user name of {$this->requease->data['User']['username']} are already exists on the system please anoyher!"));
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$faculties = $this->User->Faculty->find('list');
		$roles = $this->User->Role->find('list');
		$namePrefixes = $this->User->NamePrefix->find('list');
		$courses = $this->User->Course->find('list');
		$this->set(compact('faculties', 'roles', 'namePrefixes', 'courses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
// 	public function beforeFilter() {
// 		$this->Auth->allow('login', 'logout', 'pin');
// 		parent::beforeFilter();
// 	}
	
	public function login() {
		if ($this->request->is('post')) {
			
			if ($this->Auth->login()) {				
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
		}
	}
	
	public function logout() {
		return $this->redirect($this->Auth->logout());
	}
}
