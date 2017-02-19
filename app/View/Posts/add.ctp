<div class="row">
    <div class="col-md-10">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo __('Add Post'); ?></h3>
            </div>
            <div class="panel-body">
                <div class="posts form">
                    <?php
                      echo $this->Form->create('Post', array(
                        'inputDefaults' => array(
                          'div' => 'form-group',
                          'wrapInput' => false,
                          'class' => 'form-control'
                        ),
                        'class' => ''
                      ));
                      echo $this->Form->input('title',['type'=>'text']);
                      echo $this->Form->input('content');
                      echo $this->Form->input('featureimage');
                      echo $this->Form->input('published', ['type' => 'checkbox', 'value' => 1]);
                      echo $this->Form->input('user_id', ['options' => $users]);
                      foreach ($categories as $cat) {
                          echo $this->Form->input('PostCategory.x.', ['class'=>'','type' => 'checkbox', 'label' => $cat['Category']['name'], 'value' => $cat['Category']['id']]);
                      }
                    ?>
                    <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-primary btn-lg', 'div' => 'col-sm-12', 'style' => 'margin-top:10px;')); ?><?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo __('Actions'); ?></h3>
            </div> <!-- /panel-header -->
            <div class="panel-body">
                <?php echo $this->Html->link(__('<i class="icon icon-chevron-left"></i> Back to Index'), array('action' => 'index'), array('class' => 'btn btn-block btn-primary', 'escape' => false)); ?> </li>
                <ul class="nav nav-list nav-stacked">
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Posts'), array('action' => 'index'), array('escape' => false)); ?></li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Post Categories'), array('controller' => 'post_categories', 'action' => 'index'), array('escape' => false)); ?> </li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> New Post Category'), array('controller' => 'post_categories', 'action' => 'add'), array('escape' => false)); ?> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
