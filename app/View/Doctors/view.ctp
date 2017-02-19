<div class="row">
    <div class="doctors view col-md-10">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-th-list"></i> <?php echo __('Doctor'); ?></h3>
            </div> <!-- /panel-header -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table-striped table">
                        <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($doctor['Doctor']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($doctor['Doctor']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Specialist'); ?></td>
		<td>
			<?php echo h($doctor['Doctor']['specialist']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($doctor['Doctor']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Deleted'); ?></td>
		<td>
			<?php echo h($doctor['Doctor']['deleted']); ?>
			&nbsp;
		</td>
</tr>                    </table>
                </div>
            </div>
        </div>

        <!-- disini -->

                    <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-star"></i> <?php echo __('Related Doctor Schedules'); ?></h3>
                </div> <!-- /panel-header -->
                <div class="panel-body">
                    <?php if (!empty($doctor['DoctorSchedule'])): ?>
                    <table cellpadding = "0" cellspacing = "0">
                        <tr>
                            		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Doctor Id'); ?></th>
		<th><?php echo __('Sunday'); ?></th>
		<th><?php echo __('Monday'); ?></th>
		<th><?php echo __('Tuesday'); ?></th>
		<th><?php echo __('Wednesday'); ?></th>
		<th><?php echo __('Thursday'); ?></th>
		<th><?php echo __('Friday'); ?></th>
		<th><?php echo __('Saturday'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        	<?php foreach ($doctor['DoctorSchedule'] as $doctorSchedule): ?>
		<tr>
			<td><?php echo $doctorSchedule['id']; ?></td>
			<td><?php echo $doctorSchedule['doctor_id']; ?></td>
			<td><?php echo $doctorSchedule['sunday']; ?></td>
			<td><?php echo $doctorSchedule['monday']; ?></td>
			<td><?php echo $doctorSchedule['tuesday']; ?></td>
			<td><?php echo $doctorSchedule['wednesday']; ?></td>
			<td><?php echo $doctorSchedule['thursday']; ?></td>
			<td><?php echo $doctorSchedule['friday']; ?></td>
			<td><?php echo $doctorSchedule['saturday']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'doctor_schedules', 'action' => 'view', $doctorSchedule['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'doctor_schedules', 'action' => 'edit', $doctorSchedule['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'doctor_schedules', 'action' => 'delete', $doctorSchedule['id']), array(), __('Are you sure you want to delete # %s?', $doctorSchedule['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                    </table>
                    <?php endif; ?>

                    <div class="actions">
                        <ul>
                            <li><?php echo $this->Html->link(__('New Doctor Schedule'), array('controller' => 'doctor_schedules', 'action' => 'add')); ?> </li>
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
                    		<li class="list-group-item"><?php echo $this->Html->link(__('Edit Doctor'), array('action' => 'edit', $doctor['Doctor']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Doctor'), array('action' => 'delete', $doctor['Doctor']['id']), array(), __('Are you sure you want to delete # %s?', $doctor['Doctor']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Doctors'), array('action' => 'index')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Doctor'), array('action' => 'add')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Doctor Schedules'), array('controller' => 'doctor_schedules', 'action' => 'index')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Doctor Schedule'), array('controller' => 'doctor_schedules', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>