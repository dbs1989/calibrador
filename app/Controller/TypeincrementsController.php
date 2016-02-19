<?php
App::uses('AppController', 'Controller');
/**
 * Typeincrements Controller
 *
 * @property Typeincrement $Typeincrement
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TypeincrementsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Typeincrement->recursive = 0;
		$this->set('typeincrements', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Typeincrement->exists($id)) {
			throw new NotFoundException(__('Invalid typeincrement'));
		}
		$options = array('conditions' => array('Typeincrement.' . $this->Typeincrement->primaryKey => $id));
		$this->set('typeincrement', $this->Typeincrement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Typeincrement->create();
			if ($this->Typeincrement->save($this->request->data)) {
				$this->Session->setFlash(__('The typeincrement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The typeincrement could not be saved. Please, try again.'));
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
		if (!$this->Typeincrement->exists($id)) {
			throw new NotFoundException(__('Invalid typeincrement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Typeincrement->save($this->request->data)) {
				$this->Session->setFlash(__('The typeincrement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The typeincrement could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Typeincrement.' . $this->Typeincrement->primaryKey => $id));
			$this->request->data = $this->Typeincrement->find('first', $options);
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
		$this->Typeincrement->id = $id;
		if (!$this->Typeincrement->exists()) {
			throw new NotFoundException(__('Invalid typeincrement'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Typeincrement->delete()) {
			$this->Session->setFlash(__('The typeincrement has been deleted.'));
		} else {
			$this->Session->setFlash(__('The typeincrement could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
