<?php
App::uses('AppController', 'Controller');
/**
 * PostCategories Controller
 *
 * @property PostCategory $PostCategory
 * @property PaginatorComponent $Paginator
 */
class PostCategoriesController extends AppController {

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
'conditions' =>array('PostCategory.name LIKE ' => "$cond%"),
'limit' => 20
);
}
$this->set('search_term',$cond);
$this->PostCategory->recursive = 0;
$this->set('postCategories', $this->Paginator->paginate());
}

/**
* view method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function view($id = null) {
if (!$this->PostCategory->exists($id)) {
throw new NotFoundException(__('Invalid post category'));
}
$options = array('conditions' => array('PostCategory.' . $this->PostCategory->primaryKey => $id));
$this->set('postCategory', $this->PostCategory->find('first', $options));
}

/**
* add method
*
* @return void
*/
public function add() {
if ($this->request->is('post')) {
$this->PostCategory->create();
if ($this->PostCategory->save($this->request->data)) {
    $this->Session->setFlash(__('The post category has been saved.'));
    return $this->redirect(array('action' => 'index'));
    } else {
    $this->Session->setFlash(__('The post category could not be saved. Please, try again.'));
}
}
		$categories = $this->PostCategory->Category->find('list');
		$posts = $this->PostCategory->Post->find('list');
		$this->set(compact('categories', 'posts'));
}

/**
* edit method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function copy($id = null) {
if (!$this->PostCategory->exists($id)) {
throw new NotFoundException(__('Invalid post category'));
}
if ($this->request->is(array('post', 'put'))) {
$this->PostCategory->create();
if ($this->PostCategory->save($this->request->data)) {
    $this->Session->setFlash(__('The post category has been saved.'));
    return $this->redirect(array('action' => 'index'));
    } else {
    $this->Session->setFlash(__('The post category could not be saved. Please, try again.'));
}
} else {
$options = array('conditions' => array('PostCategory.' . $this->PostCategory->primaryKey => $id));
$this->request->data = $this->PostCategory->find('first', $options);
}
		$categories = $this->PostCategory->Category->find('list');
		$posts = $this->PostCategory->Post->find('list');
		$this->set(compact('categories', 'posts'));
}


public function edit($id = null) {
if (!$this->PostCategory->exists($id)) {
throw new NotFoundException(__('Invalid post category'));
}
if ($this->request->is(array('post', 'put'))) {
if ($this->PostCategory->save($this->request->data)) {
    $this->Session->setFlash(__('The post category has been saved.'));
    return $this->redirect(array('action' => 'index'));
    } else {
    $this->Session->setFlash(__('The post category could not be saved. Please, try again.'));
}
} else {
$options = array('conditions' => array('PostCategory.' . $this->PostCategory->primaryKey => $id));
$this->request->data = $this->PostCategory->find('first', $options);
}
		$categories = $this->PostCategory->Category->find('list');
		$posts = $this->PostCategory->Post->find('list');
		$this->set(compact('categories', 'posts', 'categories', 'posts'));
}

/**
* delete method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function delete($id = null) {
$this->PostCategory->id = $id;
if (!$this->PostCategory->exists()) {
throw new NotFoundException(__('Invalid post category'));
}
$this->request->allowMethod('post', 'delete');
if ($this->PostCategory->delete()) {
    $this->Session->setFlash(__('The post category has been deleted.'));
    } else {
    $this->Session->setFlash(__('The post category could not be deleted. Please, try again.'));
    }
    return $this->redirect(array('action' => 'index'));
}
}
