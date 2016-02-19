<?php
App::uses('AppController', 'Controller');
/**
 * Typeequipments Controller
 *
 * @property Typeequipment $Typeequipment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TypeequipmentsController extends AppController {

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
		$this->Typeequipment->recursive = 0;
		$this->set('typeequipments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Typeequipment->exists($id)) {
			throw new NotFoundException(__('Invalid typeequipment'));
		}
		$options = array('conditions' => array('Typeequipment.' . $this->Typeequipment->primaryKey => $id));
		$this->set('typeequipment', $this->Typeequipment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Typeequipment->create();
			if ($this->Typeequipment->save($this->request->data)) {
				$this->Session->setFlash(__('The typeequipment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The typeequipment could not be saved. Please, try again.'));
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
		if (!$this->Typeequipment->exists($id)) {
			throw new NotFoundException(__('Invalid typeequipment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Typeequipment->save($this->request->data)) {
				$this->Session->setFlash(__('The typeequipment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The typeequipment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Typeequipment.' . $this->Typeequipment->primaryKey => $id));
			$this->request->data = $this->Typeequipment->find('first', $options);
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
		$this->Typeequipment->id = $id;
		if (!$this->Typeequipment->exists()) {
			throw new NotFoundException(__('Invalid typeequipment'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Typeequipment->delete()) {
			$this->Session->setFlash(__('The typeequipment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The typeequipment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
