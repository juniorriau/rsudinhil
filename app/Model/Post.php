<?php

  App::uses('AppModel', 'Model');

  /**
   * Post Model
   *
   * @property User $User
   * @property PostCategory $PostCategory
   */
  class Post extends AppModel {

      /**
       * Validation rules
       *
       * @var array
       */
      public $validate = array(
        'title' => array(
          'notEmpty' => array(
            'rule' => array('notEmpty'),
          //'message' => 'Your custom message here',
          //'allowEmpty' => false,
          //'required' => false,
          //'last' => false, // Stop validation after this rule
          //'on' => 'create', // Limit validation to 'create' or 'update' operations
          ),
        ),
        'slug' => array(
          'notEmpty' => array(
            'rule' => array('notEmpty'),
          //'message' => 'Your custom message here',
          //'allowEmpty' => false,
          //'required' => false,
          //'last' => false, // Stop validation after this rule
          //'on' => 'create', // Limit validation to 'create' or 'update' operations
          ),
        ),
        'content' => array(
          'notEmpty' => array(
            'rule' => array('notEmpty'),
          //'message' => 'Your custom message here',
          //'allowEmpty' => false,
          //'required' => false,
          //'last' => false, // Stop validation after this rule
          //'on' => 'create', // Limit validation to 'create' or 'update' operations
          ),
        ),
        'dateadd' => array(
          'date' => array(
            'rule' => array('date'),
          //'message' => 'Your custom message here',
          //'allowEmpty' => false,
          //'required' => false,
          //'last' => false, // Stop validation after this rule
          //'on' => 'create', // Limit validation to 'create' or 'update' operations
          ),
        ),
        'datemodify' => array(
          'date' => array(
            'rule' => array('date'),
          //'message' => 'Your custom message here',
          //'allowEmpty' => false,
          //'required' => false,
          //'last' => false, // Stop validation after this rule
          //'on' => 'create', // Limit validation to 'create' or 'update' operations
          ),
        ),
        'featureimage' => array(
          'notEmpty' => array(
            'rule' => array('notEmpty'),
          //'message' => 'Your custom message here',
          //'allowEmpty' => false,
          //'required' => false,
          //'last' => false, // Stop validation after this rule
          //'on' => 'create', // Limit validation to 'create' or 'update' operations
          ),
        ),
        'published' => array(
          'numeric' => array(
            'rule' => array('numeric'),
          //'message' => 'Your custom message here',
          //'allowEmpty' => false,
          //'required' => false,
          //'last' => false, // Stop validation after this rule
          //'on' => 'create', // Limit validation to 'create' or 'update' operations
          ),
        ),
      );

      //The Associations below have been created with all possible keys, those that are not needed can be removed

      /**
       * belongsTo associations
       *
       * @var array
       */
      public $belongsTo = array(
        'User' => array(
          'className' => 'User',
          'foreignKey' => 'user_id',
          'conditions' => '',
          'fields' => '',
          'order' => ''
        )
      );

      /**
       * hasMany associations
       *
       * @var array
       */
      public $hasMany = array(
        'PostCategory' => array(
          'className' => 'PostCategory',
          'foreignKey' => 'post_id',
          'dependent' => false,
          'conditions' => '',
          'fields' => '',
          'order' => '',
          'limit' => '',
          'offset' => '',
          'exclusive' => '',
          'finderQuery' => '',
          'counterQuery' => ''
        )
      );

  }
  