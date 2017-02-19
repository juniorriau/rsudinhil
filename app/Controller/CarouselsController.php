<?php
App::uses('AppController', 'Controller');
/**
 * Carousels Controller
 *
 * @property Carousel $Carousel
 * @property PaginatorComponent $Paginator
 */
class CarouselsController extends AppController {

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
'conditions' =>array('Carousel.name LIKE ' => "$cond%"),
'limit' => 20
);
}
$this->set('search_term',$cond);
$this->Carousel->recursive = 0;
$this->set('carousels', $this->Paginator->paginate());
}

/**
* view method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function view($id = null) {
if (!$this->Carousel->exists($id)) {
throw new NotFoundException(__('Invalid carousel'));
}
$options = array('conditions' => array('Carousel.' . $this->Carousel->primaryKey => $id));
$this->set('carousel', $this->Carousel->find('first', $options));
}

/**
* add method
*
* @return void
*/
public function add() {
if ($this->request->is('post')) {
$this->Carousel->create();
if ($this->Carousel->save($this->request->data)) {
    $this->Session->setFlash(__('The carousel has been saved.'));
    return $this->redirect(array('action' => 'index'));
    } else {
    $this->Session->setFlash(__('The carousel could not be saved. Please, try again.'));
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
if (!$this->Carousel->exists($id)) {
throw new NotFoundException(__('Invalid carousel'));
}
if ($this->request->is(array('post', 'put'))) {
$this->Carousel->create();
if ($this->Carousel->save($this->request->data)) {
    $this->Session->setFlash(__('The carousel has been saved.'));
    return $this->redirect(array('action' => 'index'));
    } else {
    $this->Session->setFlash(__('The carousel could not be saved. Please, try again.'));
}
} else {
$options = array('conditions' => array('Carousel.' . $this->Carousel->primaryKey => $id));
$this->request->data = $this->Carousel->find('first', $options);
}
}


public function edit($id = null) {
if (!$this->Carousel->exists($id)) {
throw new NotFoundException(__('Invalid carousel'));
}
if ($this->request->is(array('post', 'put'))) {
if ($this->Carousel->save($this->request->data)) {
    $this->Session->setFlash(__('The carousel has been saved.'));
    return $this->redirect(array('action' => 'index'));
    } else {
    $this->Session->setFlash(__('The carousel could not be saved. Please, try again.'));
}
} else {
$options = array('conditions' => array('Carousel.' . $this->Carousel->primaryKey => $id));
$this->request->data = $this->Carousel->find('first', $options);
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
$this->Carousel->id = $id;
if (!$this->Carousel->exists()) {
throw new NotFoundException(__('Invalid carousel'));
}
$this->request->allowMethod('post', 'delete');
if ($this->Carousel->delete()) {
    $this->Session->setFlash(__('The carousel has been deleted.'));
    } else {
    $this->Session->setFlash(__('The carousel could not be deleted. Please, try again.'));
    }
    return $this->redirect(array('action' => 'index'));
}
}
