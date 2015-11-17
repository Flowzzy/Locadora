<?php
App::uses('AppController', 'Controller');
/**
 * Copies Controller
 *
 * @property Copy $Copy
 * @property PaginatorComponent $Paginator
 */
class CopiesController extends AppController {

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
		$this->Copy->recursive = 2;
		$this->set('copies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Copy->exists($id)) {
			throw new NotFoundException(__('Invalid copy'));
		}
		$options = array('conditions' => array('Copy.' . $this->Copy->primaryKey => $id));
		$this->set('copy', $this->Copy->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Copy->create();
			if ($this->Copy->save($this->request->data)) {
				$this->Session->setFlash(__('The copy has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The copy could not be saved. Please, try again.'));
			}
		}
		$films = $this->Copy->Film->find('list');
		$cstates = $this->Copy->Cstate->find('list');
		$this->set(compact('films', 'cstates'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Copy->exists($id)) {
			throw new NotFoundException(__('Invalid copy'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Copy->save($this->request->data)) {
				$this->Session->setFlash(__('The copy has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The copy could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Copy.' . $this->Copy->primaryKey => $id));
			$this->request->data = $this->Copy->find('first', $options);
		}
		$films = $this->Copy->Film->find('list');
		$cstates = $this->Copy->Cstate->find('list');
		$this->set(compact('films', 'cstates'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Copy->id = $id;
		if (!$this->Copy->exists()) {
			throw new NotFoundException(__('Invalid copy'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Copy->delete()) {
			$this->Session->setFlash(__('The copy has been deleted.'));
		} else {
			$this->Session->setFlash(__('The copy could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
