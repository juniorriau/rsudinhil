<?php
App::uses('AppController', 'Controller');
/**
 * Roomclasses Controller
 *
 * @property Roomclass $Roomclass
 * @property PaginatorComponent $Paginator
 */
class RoomclassesController extends AppController {

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
'conditions' =>array('Roomclass.name LIKE ' => "$cond%"),
'limit' => 20
);
}
$this->set('search_term',$cond);
$this->Roomclass->recursive = 0;
$this->set('roomclasses', $this->Paginator->paginate());
}

/**
* view method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function view($id = null) {
if (!$this->Roomclass->exists($id)) {
throw new NotFoundException(__('Invalid roomclass'));
}
$options = array('conditions' => array('Roomclass.' . $this->Roomclass->primaryKey => $id));
$this->set('roomclass', $this->Roomclass->find('first', $options));
}

/**
* add method
*
* @return void
*/
public function add() {
if ($this->request->is('post')) {
$this->Roomclass->create();
if ($this->Roomclass->save($this->request->data)) {
    $this->Session->setFlash(__('The roomclass has been saved.'));
    return $this->redirect(array('action' => 'index'));
    } else {
    $this->Session->setFlash(__('The roomclass could not be saved. Please, try again.'));
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
if (!$this->Roomclass->exists($id)) {
throw new NotFoundException(__('Invalid roomclass'));
}
if ($this->request->is(array('post', 'put'))) {
$this->Roomclass->create();
if ($this->Roomclass->save($this->request->data)) {
    $this->Session->setFlash(__('The roomclass has been saved.'));
    return $this->redirect(array('action' => 'index'));
    } else {
    $this->Session->setFlash(__('The roomclass could not be saved. Please, try again.'));
}
} else {
$options = array('conditions' => array('Roomclass.' . $this->Roomclass->primaryKey => $id));
$this->request->data = $this->Roomclass->find('first', $options);
}
}


public function edit($id = null) {
if (!$this->Roomclass->exists($id)) {
throw new NotFoundException(__('Invalid roomclass'));
}
if ($this->request->is(array('post', 'put'))) {
if ($this->Roomclass->save($this->request->data)) {
    $this->Session->setFlash(__('The roomclass has been saved.'));
    return $this->redirect(array('action' => 'index'));
    } else {
    $this->Session->setFlash(__('The roomclass could not be saved. Please, try again.'));
}
} else {
$options = array('conditions' => array('Roomclass.' . $this->Roomclass->primaryKey => $id));
$this->request->data = $this->Roomclass->find('first', $options);
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
$this->Roomclass->id = $id;
if (!$this->Roomclass->exists()) {
throw new NotFoundException(__('Invalid roomclass'));
}
$this->request->allowMethod('post', 'delete');
if ($this->Roomclass->delete()) {
    $this->Session->setFlash(__('The roomclass has been deleted.'));
    } else {
    $this->Session->setFlash(__('The roomclass could not be deleted. Please, try again.'));
    }
    return $this->redirect(array('action' => 'index'));
}
}
