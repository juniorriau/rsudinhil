<div class="row">
    <div class="rooms view col-md-10">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-th-list"></i> <?php echo __('Room'); ?></h3>
            </div> <!-- /panel-header -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table-striped table">
                        <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($room['Room']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($room['Room']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Room Category'); ?></td>
		<td>
			<?php echo $this->Html->link($room['RoomCategory']['name'], array('controller' => 'room_categories', 'action' => 'view', $room['RoomCategory']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Roomclass'); ?></td>
		<td>
			<?php echo $this->Html->link($room['Roomclass']['name'], array('controller' => 'roomclasses', 'action' => 'view', $room['Roomclass']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Detail'); ?></td>
		<td>
			<?php echo h($room['Room']['detail']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Price'); ?></td>
		<td>
			<?php echo h($room['Room']['price']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Image'); ?></td>
		<td>
			<?php echo h($room['Room']['image']); ?>
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
                    		<li class="list-group-item"><?php echo $this->Html->link(__('Edit Room'), array('action' => 'edit', $room['Room']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Room'), array('action' => 'delete', $room['Room']['id']), array(), __('Are you sure you want to delete # %s?', $room['Room']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Rooms'), array('action' => 'index')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Room'), array('action' => 'add')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Room Categories'), array('controller' => 'room_categories', 'action' => 'index')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Room Category'), array('controller' => 'room_categories', 'action' => 'add')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Roomclasses'), array('controller' => 'roomclasses', 'action' => 'index')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Roomclass'), array('controller' => 'roomclasses', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>