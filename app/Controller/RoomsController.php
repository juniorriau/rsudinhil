<?php
App::uses('AppController', 'Controller');
/**
 * Rooms Controller
 *
 * @property Room $Room
 * @property PaginatorComponent $Paginator
 */
class RoomsController extends AppController {

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

$cond='';
if ($this->request->query) {
$cond=$this->request->query['search'];
$this->Paginator->settings = array(
'conditions' =>array('Room.name LIKE ' => "$cond%"),
'limit' => 20
);
}
$this->set('search_term',$cond);
$this->Room->recursive = 0;
$this->set('rooms', $this->Paginator->paginate());
}

/**
* view method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function view($id = null) {
if (!$this->Room->exists($id)) {
throw new NotFoundException(__('Invalid room'));
}
$options = array('conditions' => array('Room.' . $this->Room->primaryKey => $id));
$this->set('room', $this->Room->find('first', $options));
}

/**
* add method
*
* @return void
*/
public function add() {
if ($this->request->is('post')) {
$this->Room->create();
if ($this->Room->save($this->request->data)) {
    $this->Session->setFlash(__('The room has been saved.'));
    return $this->redirect(array('action' => 'index'));
    } else {
    $this->Session->setFlash(__('The room could not be saved. Please, try again.'));
}
}
		$roomCategories = $this->Room->RoomCategory->find('list');
		$roomclasses = $this->Room->Roomclass->find('list');
		$this->set(compact('roomCategories', 'roomclasses'));
}

/**
* edit method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function copy($id = null) {
if (!$this->Room->exists($id)) {
throw new NotFoundException(__('Invalid room'));
}
if ($this->request->is(array('post', 'put'))) {
$this->Room->create();
if ($this->Room->save($this->request->data)) {
    $this->Session->setFlash(__('The room has been saved.'));
    return $this->redirect(array('action' => 'index'));
    } else {
    $this->Session->setFlash(__('The room could not be saved. Please, try again.'));
}
} else {
$options = array('conditions' => array('Room.' . $this->Room->primaryKey => $id));
$this->request->data = $this->Room->find('first', $options);
}
		$roomCategories = $this->Room->RoomCategory->find('list');
		$roomclasses = $this->Room->Roomclass->find('list');
		$this->set(compact('roomCategories', 'roomclasses'));
}


public function edit($id = null) {
if (!$this->Room->exists($id)) {
throw new NotFoundException(__('Invalid room'));
}
if ($this->request->is(array('post', 'put'))) {
if ($this->Room->save($this->request->data)) {
    $this->Session->setFlash(__('The room has been saved.'));
    return $this->redirect(array('action' => 'index'));
    } else {
    $this->Session->setFlash(__('The room could not be saved. Please, try again.'));
}
} else {
$options = array('conditions' => array('Room.' . $this->Room->primaryKey => $id));
$this->request->data = $this->Room->find('first', $options);
}
		$roomCategories = $this->Room->RoomCategory->find('list');
		$roomclasses = $this->Room->Roomclass->find('list');
		$this->set(compact('roomCategories', 'roomclasses', 'roomCategories', 'roomclasses'));
}

/**
* delete method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function delete($id = null) {
$this->Room->id = $id;
if (!$this->Room->exists()) {
throw new NotFoundException(__('Invalid room'));
}
$this->request->allowMethod('post', 'delete');
if ($this->Room->delete()) {
    $this->Session->setFlash(__('The room has been deleted.'));
    } else {
    $this->Session->setFlash(__('The room could not be deleted. Please, try again.'));
    }
    return $this->redirect(array('action' => 'index'));
}
}
