<div class="row">
    <div class="doctorSchedules view col-md-10">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-th-list"></i> <?php echo __('Doctor Schedule'); ?></h3>
            </div> <!-- /panel-header -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table-striped table">
                        <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($doctorSchedule['DoctorSchedule']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Doctor'); ?></td>
		<td>
			<?php echo $this->Html->link($doctorSchedule['Doctor']['name'], array('controller' => 'doctors', 'action' => 'view', $doctorSchedule['Doctor']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Sunday'); ?></td>
		<td>
			<?php echo h($doctorSchedule['DoctorSchedule']['sunday']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Monday'); ?></td>
		<td>
			<?php echo h($doctorSchedule['DoctorSchedule']['monday']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Tuesday'); ?></td>
		<td>
			<?php echo h($doctorSchedule['DoctorSchedule']['tuesday']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Wednesday'); ?></td>
		<td>
			<?php echo h($doctorSchedule['DoctorSchedule']['wednesday']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Thursday'); ?></td>
		<td>
			<?php echo h($doctorSchedule['DoctorSchedule']['thursday']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Friday'); ?></td>
		<td>
			<?php echo h($doctorSchedule['DoctorSchedule']['friday']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Saturday'); ?></td>
		<td>
			<?php echo h($doctorSchedule['DoctorSchedule']['saturday']); ?>
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
                    		<li class="list-group-item"><?php echo $this->Html->link(__('Edit Doctor Schedule'), array('action' => 'edit', $doctorSchedule['DoctorSchedule']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Doctor Schedule'), array('action' => 'delete', $doctorSchedule['DoctorSchedule']['id']), array(), __('Are you sure you want to delete # %s?', $doctorSchedule['DoctorSchedule']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Doctor Schedules'), array('action' => 'index')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Doctor Schedule'), array('action' => 'add')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Doctors'), array('controller' => 'doctors', 'action' => 'index')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Doctor'), array('controller' => 'doctors', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>