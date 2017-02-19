<div class="row">
    <div class="postCategories view col-md-10">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-th-list"></i> <?php echo __('Post Category'); ?></h3>
            </div> <!-- /panel-header -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table-striped table">
                        <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($postCategory['PostCategory']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Category'); ?></td>
		<td>
			<?php echo $this->Html->link($postCategory['Category']['name'], array('controller' => 'categories', 'action' => 'view', $postCategory['Category']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Post'); ?></td>
		<td>
			<?php echo $this->Html->link($postCategory['Post']['title'], array('controller' => 'posts', 'action' => 'view', $postCategory['Post']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($postCategory['PostCategory']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Deleted'); ?></td>
		<td>
			<?php echo h($postCategory['PostCategory']['deleted']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Deleted Date'); ?></td>
		<td>
			<?php echo h($postCategory['PostCategory']['deleted_date']); ?>
			&nbsp;
		</td>
</tr>                    </table>
                </div>
            </div>
        </div>

        <!-- disini -->

                    </div>
    <div class="col-md-2">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"> <i class="fa fa-star"></i><?php echo __('Actions'); ?></h3>
            </div> <!-- /panel-header -->
            <div class="panel-body">
                <ul class="list-group bord-no">
                    		<li class="list-group-item"><?php echo $this->Html->link(__('<i class="fa fa-chevron-left"></i> Back to Index'), array('action' => 'index'),array('escape'=>false)); ?> </li>
                    		<li class="list-group-item"><?php echo $this->Html->link(__('Edit Post Category'), array('action' => 'edit', $postCategory['PostCategory']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Post Category'), array('action' => 'delete', $postCategory['PostCategory']['id']), array(), __('Are you sure you want to delete # %s?', $postCategory['PostCategory']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Post Categories'), array('action' => 'index')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Post Category'), array('action' => 'add')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>