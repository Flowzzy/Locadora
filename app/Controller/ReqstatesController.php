<?php
App::uses('AppController', 'Controller');
/**
 * Reqstates Controller
 *
 * @property Reqstate $Reqstate
 * @property PaginatorComponent $Paginator
 */
class ReqstatesController extends AppController {

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
		$this->Reqstate->recursive = 0;
		$this->set('reqstates', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Reqstate->exists($id)) {
			throw new NotFoundException(__('Invalid reqstate'));
		}
		$options = array('conditions' => array('Reqstate.' . $this->Reqstate->primaryKey => $id));
		$this->set('reqstate', $this->Reqstate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Reqstate->create();
			if ($this->Reqstate->save($this->request->data)) {
				$this->Session->setFlash(__('The reqstate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reqstate could not be saved. Please, try again.'));
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
		if (!$this->Reqstate->exists($id)) {
			throw new NotFoundException(__('Invalid reqstate'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reqstate->save($this->request->data)) {
				$this->Session->setFlash(__('The reqstate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reqstate could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reqstate.' . $this->Reqstate->primaryKey => $id));
			$this->request->data = $this->Reqstate->find('first', $options);
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
		$this->Reqstate->id = $id;
		if (!$this->Reqstate->exists()) {
			throw new NotFoundException(__('Invalid reqstate'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Reqstate->delete()) {
			$this->Session->setFlash(__('The reqstate has been deleted.'));
		} else {
			$this->Session->setFlash(__('The reqstate could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
