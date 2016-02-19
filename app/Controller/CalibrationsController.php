<?php
App::uses('AppController', 'Controller');
/**
 * Calibrations Controller
 *
 * @property Calibration $Calibration
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CalibrationsController extends AppController {

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
		$this->Calibration->recursive = 0;
		$this->set('calibrations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Calibration->exists($id)) {
			throw new NotFoundException(__('Invalid calibration'));
		}
		$options = array('conditions' => array('Calibration.' . $this->Calibration->primaryKey => $id));
		$this->set('calibration', $this->Calibration->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Calibration->create();
			if ($this->Calibration->save($this->request->data)) {
				$this->Session->setFlash(__('The calibration has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The calibration could not be saved. Please, try again.'));
			}
		}
		$equipment = $this->Calibration->Equipment->find('list');
		$users = $this->Calibration->User->find('list');
		$physicalquantities = $this->Calibration->Physicalquantity->find('list');
		$typeincrements = $this->Calibration->Typeincrement->find('list');
		$this->set(compact('equipment', 'users', 'physicalquantities', 'typeincrements'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Calibration->exists($id)) {
			throw new NotFoundException(__('Invalid calibration'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Calibration->save($this->request->data)) {
				$this->Session->setFlash(__('The calibration has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The calibration could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Calibration.' . $this->Calibration->primaryKey => $id));
			$this->request->data = $this->Calibration->find('first', $options);
		}
		$equipment = $this->Calibration->Equipment->find('list');
		$users = $this->Calibration->User->find('list');
		$physicalquantities = $this->Calibration->Physicalquantity->find('list');
		$typeincrements = $this->Calibration->Typeincrement->find('list');
		$this->set(compact('equipment', 'users', 'physicalquantities', 'typeincrements'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Calibration->id = $id;
		if (!$this->Calibration->exists()) {
			throw new NotFoundException(__('Invalid calibration'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Calibration->delete()) {
			$this->Session->setFlash(__('The calibration has been deleted.'));
		} else {
			$this->Session->setFlash(__('The calibration could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
