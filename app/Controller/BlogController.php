<?php

  class BlogController extends AppController {

      public function __construct($request = null, $response = null) {
          parent::__construct($request, $response);
          $this->layout = "frontend";
      }

      public $components = array("Paginator");
      var $uses = ['Post', 'Category', 'PostCategory'];

      public function index() {
          $this->layout = "frontend";
          $this->set('data', $this->Post->find('all', ['order' => "Post.id desc"]));
      }

      public function detail($id) {

          $post = $this->Post->find('first', ['conditions' => ['Post.id' => $id]]);
          $categories = $this->Category->find("all");
          $recent_posts = $this->Post->find('all', ['order' => "Post.id desc", 'limit' => 5]);
          $this->set(compact('post', 'categories', 'recent_posts'));
      }

  }
  