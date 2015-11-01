<div class="accounts form">
<?php echo $this->Form->create('Account'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Account'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fb_email');
		echo $this->Form->input('fb_password');
		echo $this->Form->input('fb_id');
		echo $this->Form->input('fb_token');
		echo $this->Form->input('tinder_token');
		echo $this->Form->input('last_activity_date');
		echo $this->Form->input('like_reminings');
		echo $this->Form->input('superlike_reminings');
		echo $this->Form->input('superlike_reset_at');
		echo $this->Form->input('bio');
		echo $this->Form->input('age_filter_min');
		echo $this->Form->input('age_filter_max');
		echo $this->Form->input('gender');
		echo $this->Form->input('distance_filter');
		echo $this->Form->input('user_id');
		echo $this->Form->input('location_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Account.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Account.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actions'), array('controller' => 'actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action'), array('controller' => 'actions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>
