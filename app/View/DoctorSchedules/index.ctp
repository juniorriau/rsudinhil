<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <div class="panel-control">
<!--                    <button data-toggle="collapse" data-target="#demo-panel-collapse" class="btn btn-default"><i class="fa fa-chevron-down"></i></button>
                    <button data-dismiss="panel" class="btn btn-default"><i class="fa fa-times"></i></button>-->
                    <a title="" data-html="true" data-original-title="&lt;h4 class='text-thin'&gt;Information&lt;/h4&gt;&lt;p style='width:150px'&gt;This is an information bubble to help the user.&lt;/p&gt;" href="#" class="fa fa-question-circle fa-lg fa-fw unselectable add-tooltip"></a>
                </div>
                <h3 class="panel-title"><?php echo __('Doctor Schedules'); ?></h3>
            </div>
            <div class="panel-body">
                <div class="pad-btm form-inline">
                    <div class="row">
                        <div class="col-sm-6 table-toolbar-left">
                            <?php echo $this->Html->link('<i class="fa fa-plus"></i>',array('action'=>'add'),array('class'=>'btn btn-success','escape'=>false));?>                            <a href="#" class="btn btn-primary print-btn" alt=""><i class="fa fa-print"></i></a>
                            <div class="btn-group">
                                <button class="btn btn-default"><i class="fa fa-exclamation-circle"></i></button>
                                <button class="btn btn-default"><i class="fa fa-trash"></i></button>
                            </div>
                        </div>
                        <div class="col-sm-6 table-toolbar-right">
                            <div class="form-group">
                                <?php echo $this->Form->create('DoctorSchedule',array('type'=>'get','style'=>'margin:5px auto;','action'=>'index'));?>                                <div class="input-group custom-search-form" style="margin-top: -5px;">
                                    <input type="text" class="form-control" name="search" placeholder="search" value="<?php echo $search_term;?>">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <?php echo $this->Form->end();?>                            </div>
                            <div class="btn-group">
                                <?php echo $this->Html->link('<i class="icon icon-refresh"></i> View All',array('action'=>'index'),array('class'=>'btn btn-default','escape'=>false));?>                                <div class="btn-group">
                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-cog"></i>
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Action</a></li>
                                        		<li><?php echo $this->Html->link(__('List Doctors'), array('controller' => 'doctors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor'), array('controller' => 'doctors', 'action' => 'add')); ?> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                                                                                                <th><?php echo $this->Paginator->sort('id'); ?></th>
                                                                                                                                                                <th><?php echo $this->Paginator->sort('doctor_id'); ?></th>
                                                                                                                                                                <th><?php echo $this->Paginator->sort('sunday'); ?></th>
                                                                                                                                                                <th><?php echo $this->Paginator->sort('monday'); ?></th>
                                                                                                                                                                <th><?php echo $this->Paginator->sort('tuesday'); ?></th>
                                                                                                                                                                <th><?php echo $this->Paginator->sort('wednesday'); ?></th>
                                                                                                                                                                <th><?php echo $this->Paginator->sort('thursday'); ?></th>
                                                                                                                                                                <th><?php echo $this->Paginator->sort('friday'); ?></th>
                                                                                                                                                                <th><?php echo $this->Paginator->sort('saturday'); ?></th>
                                                                                                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody><?php foreach ($doctorSchedules as $doctorSchedule): ?>
	 <tr>
		<td><?php echo h($doctorSchedule['DoctorSchedule']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($doctorSchedule['Doctor']['name'], array('controller' => 'doctors', 'action' => 'view', $doctorSchedule['Doctor']['id'])); ?>
		</td>
		<td><?php echo h($doctorSchedule['DoctorSchedule']['sunday']); ?>&nbsp;</td>
		<td><?php echo h($doctorSchedule['DoctorSchedule']['monday']); ?>&nbsp;</td>
		<td><?php echo h($doctorSchedule['DoctorSchedule']['tuesday']); ?>&nbsp;</td>
		<td><?php echo h($doctorSchedule['DoctorSchedule']['wednesday']); ?>&nbsp;</td>
		<td><?php echo h($doctorSchedule['DoctorSchedule']['thursday']); ?>&nbsp;</td>
		<td><?php echo h($doctorSchedule['DoctorSchedule']['friday']); ?>&nbsp;</td>
		<td><?php echo h($doctorSchedule['DoctorSchedule']['saturday']); ?>&nbsp;</td>
		<td class="actionsx">
			<?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $doctorSchedule['DoctorSchedule']['id']),array('escape' => false,'title'=>'view details','class'=>'btn btn-default btn-sm')); ?>
			<?php echo $this->Html->link(__('<i class="fa fa-copy"></i>'), array('action' => 'copy', $doctorSchedule['DoctorSchedule']['id']),array('escape' => false,'title'=>'copy','class'=>'btn btn-default btn-sm')); ?>
			<?php echo $this->Html->link(__('<i class="fa fa-edit"></i>'), array('action' => 'edit', $doctorSchedule['DoctorSchedule']['id']),array('escape' => false,'title'=>'edit this record','class'=>'btn btn-default btn-sm')); ?>
			<?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i>'), array('action' => 'delete', $doctorSchedule['DoctorSchedule']['id']),array('escape' => false,'title'=>'delete this record','class'=>'btn btn-default btn-sm'), __('Are you sure you want to delete # %s?', $doctorSchedule['DoctorSchedule']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</tbody>                    </table>
                </div>
                <div class="row">
                    <div class="col-md-5 col-lg-offset-1">
                        <?php
            echo $this->Paginator->pagination(array(
                "ul" => "pagination"
            ));
            ?>                    </div>
                    <div class="col-md-6" style="margin-top:30px;">
                        <?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?></div>
                </div>
            </div>

        </div>
    </div>
</div>