<?php
App::uses('AppController', 'Controller');
/**
 * CoursesUsers Controller
 *
 * @property CoursesUser $CoursesUser
 * @property PaginatorComponent $Paginator
 */
class CoursesUsersController extends AppController {

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
		$this->CoursesUser->recursive = 0;
		$this->set('coursesUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CoursesUser->exists($id)) {
			throw new NotFoundException(__('Invalid courses user'));
		}
		$options = array('conditions' => array('CoursesUser.' . $this->CoursesUser->primaryKey => $id));
		$this->set('coursesUser', $this->CoursesUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CoursesUser->create();
			if ($this->CoursesUser->save($this->request->data)) {
				$this->Flash->success(__('The courses user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The courses user could not be saved. Please, try again.'));
			}
		}
		$users = $this->CoursesUser->User->find('list');
		$courses = $this->CoursesUser->Course->find('list');
		$this->set(compact('users', 'courses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CoursesUser->exists($id)) {
			throw new NotFoundException(__('Invalid courses user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CoursesUser->save($this->request->data)) {
				$this->Flash->success(__('The courses user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The courses user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CoursesUser.' . $this->CoursesUser->primaryKey => $id));
			$this->request->data = $this->CoursesUser->find('first', $options);
		}
		$users = $this->CoursesUser->User->find('list');
		$courses = $this->CoursesUser->Course->find('list');
		$this->set(compact('users', 'courses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CoursesUser->id = $id;
		if (!$this->CoursesUser->exists()) {
			throw new NotFoundException(__('Invalid courses user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CoursesUser->delete()) {
			$this->Flash->success(__('The courses user has been deleted.'));
		} else {
			$this->Flash->error(__('The courses user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
