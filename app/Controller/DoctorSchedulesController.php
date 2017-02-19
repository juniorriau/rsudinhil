<?php
App::uses('AppController', 'Controller');
/**
 * DoctorSchedules Controller
 *
 * @property DoctorSchedule $DoctorSchedule
 * @property PaginatorComponent $Paginator
 */
class DoctorSchedulesController extends AppController {

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
'conditions' =>array('DoctorSchedule.name LIKE ' => "$cond%"),
'limit' => 20
);
}
$this->set('search_term',$cond);
$this->DoctorSchedule->recursive = 0;
$this->set('doctorSchedules', $this->Paginator->paginate());
}

/**
* view method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function view($id = null) {
if (!$this->DoctorSchedule->exists($id)) {
throw new NotFoundException(__('Invalid doctor schedule'));
}
$options = array('conditions' => array('DoctorSchedule.' . $this->DoctorSchedule->primaryKey => $id));
$this->set('doctorSchedule', $this->DoctorSchedule->find('first', $options));
}

/**
* add method
*
* @return void
*/
public function add() {
if ($this->request->is('post')) {
$this->DoctorSchedule->create();
if ($this->DoctorSchedule->save($this->request->data)) {
    $this->Session->setFlash(__('The doctor schedule has been saved.'));
    return $this->redirect(array('action' => 'index'));
    } else {
    $this->Session->setFlash(__('The doctor schedule could not be saved. Please, try again.'));
}
}
		$doctors = $this->DoctorSchedule->Doctor->find('list');
		$this->set(compact('doctors'));
}

/**
* edit method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function copy($id = null) {
if (!$this->DoctorSchedule->exists($id)) {
throw new NotFoundException(__('Invalid doctor schedule'));
}
if ($this->request->is(array('post', 'put'))) {
$this->DoctorSchedule->create();
if ($this->DoctorSchedule->save($this->request->data)) {
    $this->Session->setFlash(__('The doctor schedule has been saved.'));
    return $this->redirect(array('action' => 'index'));
    } else {
    $this->Session->setFlash(__('The doctor schedule could not be saved. Please, try again.'));
}
} else {
$options = array('conditions' => array('DoctorSchedule.' . $this->DoctorSchedule->primaryKey => $id));
$this->request->data = $this->DoctorSchedule->find('first', $options);
}
		$doctors = $this->DoctorSchedule->Doctor->find('list');
		$this->set(compact('doctors'));
}


public function edit($id = null) {
if (!$this->DoctorSchedule->exists($id)) {
throw new NotFoundException(__('Invalid doctor schedule'));
}
if ($this->request->is(array('post', 'put'))) {
if ($this->DoctorSchedule->save($this->request->data)) {
    $this->Session->setFlash(__('The doctor schedule has been saved.'));
    return $this->redirect(array('action' => 'index'));
    } else {
    $this->Session->setFlash(__('The doctor schedule could not be saved. Please, try again.'));
}
} else {
$options = array('conditions' => array('DoctorSchedule.' . $this->DoctorSchedule->primaryKey => $id));
$this->request->data = $this->DoctorSchedule->find('first', $options);
}
		$doctors = $this->DoctorSchedule->Doctor->find('list');
		$this->set(compact('doctors', 'doctors'));
}

/**
* delete method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function delete($id = null) {
$this->DoctorSchedule->id = $id;
if (!$this->DoctorSchedule->exists()) {
throw new NotFoundException(__('Invalid doctor schedule'));
}
$this->request->allowMethod('post', 'delete');
if ($this->DoctorSchedule->delete()) {
    $this->Session->setFlash(__('The doctor schedule has been deleted.'));
    } else {
    $this->Session->setFlash(__('The doctor schedule could not be deleted. Please, try again.'));
    }
    return $this->redirect(array('action' => 'index'));
}
}
