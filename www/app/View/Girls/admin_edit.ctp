<div class="girls form">
<?php echo $this->Form->create('Girl'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Girl'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('_id');
		echo $this->Form->input('bio');
		echo $this->Form->input('photos');
		echo $this->Form->input('instagram');
		echo $this->Form->input('birth_date');
		echo $this->Form->input('ping_time');
		echo $this->Form->input('datetime');
		echo $this->Form->input('location_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Girl.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Girl.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Girls'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actions'), array('controller' => 'actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action'), array('controller' => 'actions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
	</ul>
</div>
