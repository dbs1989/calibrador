<?php
App::uses('AppController', 'Controller');
/**
 * Coefficients Controller
 *
 * @property Coefficient $Coefficient
 * @property PaginatorComponent $Paginator
 */
class CoefficientsController extends AppController {

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
		$this->Coefficient->recursive = 0;
		$this->set('coefficients', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Coefficient->exists($id)) {
			throw new NotFoundException(__('Invalid coefficient'));
		}
		$options = array('conditions' => array('Coefficient.' . $this->Coefficient->primaryKey => $id));
		$this->set('coefficient', $this->Coefficient->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Coefficient->create();
			if ($this->Coefficient->save($this->request->data)) {
				$this->Session->setFlash(__('The coefficient has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coefficient could not be saved. Please, try again.'));
			}
		}
		$equipment = $this->Coefficient->Equipment->find('list');
		$this->set(compact('equipment'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Coefficient->exists($id)) {
			throw new NotFoundException(__('Invalid coefficient'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Coefficient->save($this->request->data)) {
				$this->Session->setFlash(__('The coefficient has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coefficient could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Coefficient.' . $this->Coefficient->primaryKey => $id));
			$this->request->data = $this->Coefficient->find('first', $options);
		}
		$equipment = $this->Coefficient->Equipment->find('list');
		$this->set(compact('equipment'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Coefficient->id = $id;
		if (!$this->Coefficient->exists()) {
			throw new NotFoundException(__('Invalid coefficient'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Coefficient->delete()) {
			$this->Session->setFlash(__('The coefficient has been deleted.'));
		} else {
			$this->Session->setFlash(__('The coefficient could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
