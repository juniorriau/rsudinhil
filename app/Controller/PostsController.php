<?php

  App::uses('AppController', 'Controller');

  /**
   * Posts Controller
   *
   * @property Post $Post
   * @property PaginatorComponent $Paginator
   */
  class PostsController extends AppController {

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

          $cond = '';
          if ($this->request->query) {
              $cond = $this->request->query['search'];
              $this->Paginator->settings = array(
                'conditions' => array('Post.name LIKE ' => "$cond%"),
                'limit' => 20
              );
          }
          $this->set('search_term', $cond);
          $this->Post->recursive = 0;
          $this->set('posts', $this->Paginator->paginate());
      }

      /**
       * view method
       *
       * @throws NotFoundException
       * @param string $id
       * @return void
       */
      public function view($id = null) {
          if (!$this->Post->exists($id)) {
              throw new NotFoundException(__('Invalid post'));
          }
          $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
          $this->set('post', $this->Post->find('first', $options));
      }

      /**
       * add method
       *
       * @return void
       */
      public function add() {
          if ($this->request->is('post')) {
              $this->Post->create();


              $this->request->data['Post']['slug'] = $this->Util->SeoUrl($this->request->data['Post']['title']);
              $this->request->data['Post']['dateadd'] = date('Y-m-d');
              $this->request->data['Post']['datemodify'] = date('Y-m-d');
              $this->request->data['Post']['published'] = 1;
              $this->request->data['Post']['featureimage'] = $this->request->data['Post']['featureimage'] == '' ? '-' : $this->request->data['Post']['featureimage'];

              $i = 0;
              foreach ($this->request->data['PostCategory']['x'] as $p):
                  $this->request->data['PostCategory'][$i]['category_id'] = $p;
                  $i++;
              endforeach;

              $this->Util->debug($this->request->data);
              die;
              if ($this->Post->saveAll($this->request->data)) {
                  $this->Session->setFlash(__('The post has been saved.'));
                  return $this->redirect(array('action' => 'index'));
              } else {
                  $this->Session->setFlash(__('The post could not be saved. Please, try again.'));
                  $this->Util->debug($this->Post->validationErrors);
                  die;
              }
          }
          $this->loadModel("User");
          $this->loadModel("Category");
          $this->set('users', $this->User->find('all'));
          $this->set('categories', $this->Category->find('all'));
      }

      /**
       * edit method
       *
       * @throws NotFoundException
       * @param string $id
       * @return void
       */
      public function copy($id = null) {
          if (!$this->Post->exists($id)) {
              throw new NotFoundException(__('Invalid post'));
          }
          if ($this->request->is(array('post', 'put'))) {
              $this->Post->create();
              if ($this->Post->save($this->request->data)) {
                  $this->Session->setFlash(__('The post has been saved.'));
                  return $this->redirect(array('action' => 'index'));
              } else {
                  $this->Session->setFlash(__('The post could not be saved. Please, try again.'));
              }
          } else {
              $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
              $this->request->data = $this->Post->find('first', $options);
          }
      }

      public function edit($id = null) {
          if (!$this->Post->exists($id)) {
              throw new NotFoundException(__('Invalid post'));
          }
          if ($this->request->is(array('post', 'put'))) {
              if ($this->Post->save($this->request->data)) {
                  $this->Session->setFlash(__('The post has been saved.'));
                  return $this->redirect(array('action' => 'index'));
              } else {
                  $this->Session->setFlash(__('The post could not be saved. Please, try again.'));
              }
          } else {
              $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
              $this->request->data = $this->Post->find('first', $options);
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
          $this->Post->id = $id;
          if (!$this->Post->exists()) {
              throw new NotFoundException(__('Invalid post'));
          }
          $this->request->allowMethod('post', 'delete');
          if ($this->Post->delete()) {
              $this->Session->setFlash(__('The post has been deleted.'));
          } else {
              $this->Session->setFlash(__('The post could not be deleted. Please, try again.'));
          }
          return $this->redirect(array('action' => 'index'));
      }

  }
  