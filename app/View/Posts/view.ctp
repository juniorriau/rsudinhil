<div class="row">
    <div class="posts view col-md-10">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-th-list"></i> <?php echo __('Post'); ?></h3>
            </div> <!-- /panel-header -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table-striped table">
                        <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($post['Post']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Title'); ?></td>
		<td>
			<?php echo h($post['Post']['title']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Slug'); ?></td>
		<td>
			<?php echo h($post['Post']['slug']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Content'); ?></td>
		<td>
			<?php echo h($post['Post']['content']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Dateadd'); ?></td>
		<td>
			<?php echo h($post['Post']['dateadd']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Datemodify'); ?></td>
		<td>
			<?php echo h($post['Post']['datemodify']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Featureimage'); ?></td>
		<td>
			<?php echo h($post['Post']['featureimage']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Published'); ?></td>
		<td>
			<?php echo h($post['Post']['published']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('User Id'); ?></td>
		<td>
			<?php echo h($post['Post']['user_id']); ?>
			&nbsp;
		</td>
</tr>                    </table>
                </div>
            </div>
        </div>

        <!-- disini -->

                    <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-star"></i> <?php echo __('Related Post Categories'); ?></h3>
                </div> <!-- /panel-header -->
                <div class="panel-body">
                    <?php if (!empty($post['PostCategory'])): ?>
                    <table cellpadding = "0" cellspacing = "0">
                        <tr>
                            		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Post Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th><?php echo __('Deleted Date'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        	<?php foreach ($post['PostCategory'] as $postCategory): ?>
		<tr>
			<td><?php echo $postCategory['id']; ?></td>
			<td><?php echo $postCategory['category_id']; ?></td>
			<td><?php echo $postCategory['post_id']; ?></td>
			<td><?php echo $postCategory['created']; ?></td>
			<td><?php echo $postCategory['deleted']; ?></td>
			<td><?php echo $postCategory['deleted_date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'post_categories', 'action' => 'view', $postCategory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'post_categories', 'action' => 'edit', $postCategory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'post_categories', 'action' => 'delete', $postCategory['id']), array(), __('Are you sure you want to delete # %s?', $postCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                    </table>
                    <?php endif; ?>

                    <div class="actions">
                        <ul>
                            <li><?php echo $this->Html->link(__('New Post Category'), array('controller' => 'post_categories', 'action' => 'add')); ?> </li>
                        </ul>
                    </div>
                </div>
            </div>
                    </div>
    <div class="col-md-2">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"> <i class="fa fa-star"></i><?php echo __('Actions'); ?></h3>
            </div> <!-- /panel-header -->
            <div class="panel-body">
                <ul class="list-group bord-no">
                    		<li class="list-group-item"><?php echo $this->Html->link(__('<i class="fa fa-chevron-left"></i> Back to Index'), array('action' => 'index'),array('escape'=>false)); ?> </li>
                    		<li class="list-group-item"><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), array(), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Post Categories'), array('controller' => 'post_categories', 'action' => 'index')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Post Category'), array('controller' => 'post_categories', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>