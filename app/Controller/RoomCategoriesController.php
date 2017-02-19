<?php
App::uses('AppController', 'Controller');
/**
 * RoomCategories Controller
 *
 * @property RoomCategory $RoomCategory
 * @property PaginatorComponent $Paginator
 */
class RoomCategoriesController extends AppController {

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
'conditions' =>array('RoomCategory.name LIKE ' => "$cond%"),
'limit' => 20
);
}
$this->set('search_term',$cond);
$this->RoomCategory->recursive = 0;
$this->set('roomCategories', $this->Paginator->paginate());
}

/**
* view method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function view($id = null) {
if (!$this->RoomCategory->exists($id)) {
throw new NotFoundException(__('Invalid room category'));
}
$options = array('conditions' => array('RoomCategory.' . $this->RoomCategory->primaryKey => $id));
$this->set('roomCategory', $this->RoomCategory->find('first', $options));
}

/**
* add method
*
* @return void
*/
public function add() {
if ($this->request->is('post')) {
$this->RoomCategory->create();
if ($this->RoomCategory->save($this->request->data)) {
    $this->Session->setFlash(__('The room category has been saved.'));
    return $this->redirect(array('action' => 'index'));
    } else {
    $this->Session->setFlash(__('The room category could not be saved. Please, try again.'));
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
public function copy($id = null) {
if (!$this->RoomCategory->exists($id)) {
throw new NotFoundException(__('Invalid room category'));
}
if ($this->request->is(array('post', 'put'))) {
$this->RoomCategory->create();
if ($this->RoomCategory->save($this->request->data)) {
    $this->Session->setFlash(__('The room category has been saved.'));
    return $this->redirect(array('action' => 'index'));
    } else {
    $this->Session->setFlash(__('The room category could not be saved. Please, try again.'));
}
} else {
$options = array('conditions' => array('RoomCategory.' . $this->RoomCategory->primaryKey => $id));
$this->request->data = $this->RoomCategory->find('first', $options);
}
}


public function edit($id = null) {
if (!$this->RoomCategory->exists($id)) {
throw new NotFoundException(__('Invalid room category'));
}
if ($this->request->is(array('post', 'put'))) {
if ($this->RoomCategory->save($this->request->data)) {
    $this->Session->setFlash(__('The room category has been saved.'));
    return $this->redirect(array('action' => 'index'));
    } else {
    $this->Session->setFlash(__('The room category could not be saved. Please, try again.'));
}
} else {
$options = array('conditions' => array('RoomCategory.' . $this->RoomCategory->primaryKey => $id));
$this->request->data = $this->RoomCategory->find('first', $options);
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
$this->RoomCategory->id = $id;
if (!$this->RoomCategory->exists()) {
throw new NotFoundException(__('Invalid room category'));
}
$this->request->allowMethod('post', 'delete');
if ($this->RoomCategory->delete()) {
    $this->Session->setFlash(__('The room category has been deleted.'));
    } else {
    $this->Session->setFlash(__('The room category could not be deleted. Please, try again.'));
    }
    return $this->redirect(array('action' => 'index'));
}
}
