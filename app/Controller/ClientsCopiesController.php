<?php

App::uses('AppController', 'Controller');

/**
 * ClientsCopies Controller
 *
 * @property ClientsCopy $ClientsCopy
 * @property PaginatorComponent $Paginator
 */
class ClientsCopiesController extends AppController {

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
        $this->ClientsCopy->recursive = 0;
        $this->set('clientsCopies', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->ClientsCopy->exists($id)) {
            throw new NotFoundException(__('Invalid clients copy'));
        }
        $options = array('conditions' => array('ClientsCopy.' . $this->ClientsCopy->primaryKey => $id));
        $this->set('clientsCopy', $this->ClientsCopy->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->ClientsCopy->create();
            if ($this->ClientsCopy->save($this->request->data)) {
                $this->Session->setFlash(__('The clients copy has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The clients copy could not be saved. Please, try again.'));
            }
        }
        $copies = $this->ClientsCopy->Copy->find('list');
        $clients = $this->ClientsCopy->Client->find('list');
        $reqstates = $this->ClientsCopy->Reqstate->find('list');
        $this->set(compact('copies', 'clients', 'reqstates'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->ClientsCopy->exists($id)) {
            throw new NotFoundException(__('Invalid clients copy'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->ClientsCopy->save($this->request->data)) {
                $this->Session->setFlash(__('The clients copy has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The clients copy could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('ClientsCopy.' . $this->ClientsCopy->primaryKey => $id));
            $this->request->data = $this->ClientsCopy->find('first', $options);
        }
        $copies = $this->ClientsCopy->Copy->find('list');
        $clients = $this->ClientsCopy->Client->find('list');
        $reqstates = $this->ClientsCopy->Reqstate->find('list');
        $this->set(compact('copies', 'clients', 'reqstates'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->ClientsCopy->id = $id;
        if (!$this->ClientsCopy->exists()) {
            throw new NotFoundException(__('Invalid clients copy'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->ClientsCopy->delete()) {
            $this->Session->setFlash(__('The clients copy has been deleted.'));
        } else {
            $this->Session->setFlash(__('The clients copy could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function searchperdate($id = null) { //metodo para buscar todas tarefas por data
        //$result = array();
        $query = $this->request->data['ClientsCopy']['buscador']; // recebe o parametro de pesquisa, com Modelo=Task e input-id=buscador

        $conditions = array(
            'conditions' => array(
                'ClientsCopy.devdate LIKE' => "%$query%"
            )
        );

        $result = $this->ClientsCopy->find('all', $conditions);


        $this->set('result', $result);
//debug($this->data);
    }

    public function devofilme($id = null) {
        $this->ClientsCopy->recursive = 0;
        $this->set('clientsCopies', $this->Paginator->paginate());
    }

    public function topdez() {

        $this->set('clientscopy', $this->Film->find('all', array(
                    'fields' => array(
                        'ClientsCopy.copy_id',
                        'COUNT(ClientsCopy.copy_id) as conta'
                    ),
                    'group' => 'ClientsCopy.copy_id',
                    'order' => array('COUNT(ClientsCopy.copy_id)' => 'asc'),
                    'limit' => 10
        )));
    }

}
