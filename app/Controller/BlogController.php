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
          $posts = $this->Post->find('all', ['order' => "Post.id desc"]);
          $categories = $this->Category->find("all");
          $recent_posts = $this->Post->find('all', ['order' => "Post.id desc", 'limit' => 5]);
          $this->set(compact('posts', 'categories', 'recent_posts'));
      }

      public function category($id = null) {
          $this->layout = "frontend";
          $posts = $this->PostCategory->find('all', ['conditions' => ['PostCategory.category_id' => $id], 'order' => "Post.id desc"]);
          $categories = $this->Category->find("all");
          $recent_posts = $this->Post->find('all', ['order' => "Post.id desc", 'limit' => 5]);
          $this->set(compact('posts', 'categories', 'recent_posts'));
      }

      public function detail($slug = null) {

          $post = $this->Post->find('first', ['conditions' => ['Post.slug' => $slug]]);
          $categories = $this->Category->find("all");
          $recent_posts = $this->Post->find('all', ['order' => "Post.id desc", 'limit' => 5]);
          $this->set(compact('post', 'categories', 'recent_posts'));
      }

  }
  