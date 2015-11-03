<?php
App::uses('AppController', 'Controller');
/**
 * Actions Controller
 *
 * @property Action $Action
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ActionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session', 'Tinder');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Action->recursive = 0;
		$this->set('actions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Action->exists($id)) {
			throw new NotFoundException(__('Invalid action'));
		}
		$options = array('conditions' => array('Action.' . $this->Action->primaryKey => $id));
		$this->set('action', $this->Action->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Action->create();
			if ($this->Action->save($this->request->data)) {
				$this->Flash->success(__('The action has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The action could not be saved. Please, try again.'));
			}
		}
		$accounts = $this->Action->Account->find('list');
		$girls = $this->Action->Girl->find('list');
		$this->set(compact('accounts', 'girls'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Action->exists($id)) {
			throw new NotFoundException(__('Invalid action'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Action->save($this->request->data)) {
				$this->Flash->success(__('The action has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The action could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Action.' . $this->Action->primaryKey => $id));
			$this->request->data = $this->Action->find('first', $options);
		}
		$accounts = $this->Action->Account->find('list');
		$girls = $this->Action->Girl->find('list');
		$this->set(compact('accounts', 'girls'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Action->id = $id;
		if (!$this->Action->exists()) {
			throw new NotFoundException(__('Invalid action'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Action->delete()) {
			$this->Flash->success(__('The action has been deleted.'));
		} else {
			$this->Flash->error(__('The action could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Action->recursive = 0;
		$this->set('actions', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Action->exists($id)) {
			throw new NotFoundException(__('Invalid action'));
		}
		$options = array('conditions' => array('Action.' . $this->Action->primaryKey => $id));
		$this->set('action', $this->Action->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Action->create();
			if ($this->Action->save($this->request->data)) {
				$this->Flash->success(__('The action has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The action could not be saved. Please, try again.'));
			}
		}
		$accounts = $this->Action->Account->find('list');
		$girls = $this->Action->Girl->find('list');
		$this->set(compact('accounts', 'girls'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Action->exists($id)) {
			throw new NotFoundException(__('Invalid action'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Action->save($this->request->data)) {
				$this->Flash->success(__('The action has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The action could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Action.' . $this->Action->primaryKey => $id));
			$this->request->data = $this->Action->find('first', $options);
		}
		$accounts = $this->Action->Account->find('list');
		$girls = $this->Action->Girl->find('list');
		$this->set(compact('accounts', 'girls'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Action->id = $id;
		if (!$this->Action->exists()) {
			throw new NotFoundException(__('Invalid action'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Action->delete()) {
			$this->Flash->success(__('The action has been deleted.'));
		} else {
			$this->Flash->error(__('The action could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * recs method
 * appelle à /recs pour le account courant
 * @throws NotFoundException
 * @return void
 */
	public function recs() {
		$this->
		$acc_id = $this->Session->read('Auth.Current_Account.id');
		$tinder_token = $this->Session->read('Auth.Account.'.$acc_id.'.tinder_token');
		$this->Tinder->recs(
	}

/**
 * like method
 *
 * @throws NotFoundException
 * @return void
 */
	public function like() {
		
	}

/**
 * pass method
 *
 * @throws NotFoundException
 * @return void
 */
	public function pass() {
		
	}

/**
 * superlike method
 *
 * @throws NotFoundException
 * @return void
 */
	public function superlike() {
		
	}


}
