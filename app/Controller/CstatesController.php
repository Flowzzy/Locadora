<?php
App::uses('AppController', 'Controller');
/**
 * Cstates Controller
 *
 * @property Cstate $Cstate
 * @property PaginatorComponent $Paginator
 */
class CstatesController extends AppController {

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
		$this->Cstate->recursive = 0;
		$this->set('cstates', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cstate->exists($id)) {
			throw new NotFoundException(__('Invalid cstate'));
		}
		$options = array('conditions' => array('Cstate.' . $this->Cstate->primaryKey => $id));
		$this->set('cstate', $this->Cstate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cstate->create();
			if ($this->Cstate->save($this->request->data)) {
				$this->Session->setFlash(__('The cstate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cstate could not be saved. Please, try again.'));
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
		if (!$this->Cstate->exists($id)) {
			throw new NotFoundException(__('Invalid cstate'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cstate->save($this->request->data)) {
				$this->Session->setFlash(__('The cstate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cstate could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cstate.' . $this->Cstate->primaryKey => $id));
			$this->request->data = $this->Cstate->find('first', $options);
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
		$this->Cstate->id = $id;
		if (!$this->Cstate->exists()) {
			throw new NotFoundException(__('Invalid cstate'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cstate->delete()) {
			$this->Session->setFlash(__('The cstate has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cstate could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
