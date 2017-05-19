<?php
App::uses('AppController', 'Controller');
/**
 * NamePrefixes Controller
 *
 * @property NamePrefix $NamePrefix
 * @property PaginatorComponent $Paginator
 */
class NamePrefixesController extends AppController {

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
		$this->NamePrefix->recursive = 0;
		$this->set('namePrefixes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->NamePrefix->exists($id)) {
			throw new NotFoundException(__('Invalid name prefix'));
		}
		$options = array('conditions' => array('NamePrefix.' . $this->NamePrefix->primaryKey => $id));
		$this->set('namePrefix', $this->NamePrefix->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->NamePrefix->create();
			if ($this->NamePrefix->save($this->request->data)) {
				$this->Flash->success(__('The name prefix has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The name prefix could not be saved. Please, try again.'));
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
		if (!$this->NamePrefix->exists($id)) {
			throw new NotFoundException(__('Invalid name prefix'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->NamePrefix->save($this->request->data)) {
				$this->Flash->success(__('The name prefix has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The name prefix could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('NamePrefix.' . $this->NamePrefix->primaryKey => $id));
			$this->request->data = $this->NamePrefix->find('first', $options);
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
		$this->NamePrefix->id = $id;
		if (!$this->NamePrefix->exists()) {
			throw new NotFoundException(__('Invalid name prefix'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->NamePrefix->delete()) {
			$this->Flash->success(__('The name prefix has been deleted.'));
		} else {
			$this->Flash->error(__('The name prefix could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
