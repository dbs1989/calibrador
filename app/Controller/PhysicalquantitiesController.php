<?php
App::uses('AppController', 'Controller');
/**
 * Physicalquantities Controller
 *
 * @property Physicalquantity $Physicalquantity
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PhysicalquantitiesController extends AppController {

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
		$this->Physicalquantity->recursive = 0;
		$this->set('physicalquantities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Physicalquantity->exists($id)) {
			throw new NotFoundException(__('Invalid physicalquantity'));
		}
		$options = array('conditions' => array('Physicalquantity.' . $this->Physicalquantity->primaryKey => $id));
		$this->set('physicalquantity', $this->Physicalquantity->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Physicalquantity->create();
			if ($this->Physicalquantity->save($this->request->data)) {
				$this->Session->setFlash(__('The physicalquantity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The physicalquantity could not be saved. Please, try again.'));
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
		if (!$this->Physicalquantity->exists($id)) {
			throw new NotFoundException(__('Invalid physicalquantity'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Physicalquantity->save($this->request->data)) {
				$this->Session->setFlash(__('The physicalquantity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The physicalquantity could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Physicalquantity.' . $this->Physicalquantity->primaryKey => $id));
			$this->request->data = $this->Physicalquantity->find('first', $options);
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
		$this->Physicalquantity->id = $id;
		if (!$this->Physicalquantity->exists()) {
			throw new NotFoundException(__('Invalid physicalquantity'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Physicalquantity->delete()) {
			$this->Session->setFlash(__('The physicalquantity has been deleted.'));
		} else {
			$this->Session->setFlash(__('The physicalquantity could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
