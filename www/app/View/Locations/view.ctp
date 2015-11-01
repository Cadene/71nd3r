<div class="locations view">
<h2><?php echo __('Location'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($location['Location']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($location['Location']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lat'); ?></dt>
		<dd>
			<?php echo h($location['Location']['lat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Long'); ?></dt>
		<dd>
			<?php echo h($location['Location']['long']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Location'), array('action' => 'edit', $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Location'), array('action' => 'delete', $location['Location']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $location['Location']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Girls'), array('controller' => 'girls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Girl'), array('controller' => 'girls', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Accounts'); ?></h3>
	<?php if (!empty($location['Account'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fb Email'); ?></th>
		<th><?php echo __('Fb Password'); ?></th>
		<th><?php echo __('Fb Id'); ?></th>
		<th><?php echo __('Fb Token'); ?></th>
		<th><?php echo __('Tinder Token'); ?></th>
		<th><?php echo __('Last Activity Date'); ?></th>
		<th><?php echo __('Like Reminings'); ?></th>
		<th><?php echo __('Superlike Reminings'); ?></th>
		<th><?php echo __('Superlike Reset At'); ?></th>
		<th><?php echo __('Bio'); ?></th>
		<th><?php echo __('Age Filter Min'); ?></th>
		<th><?php echo __('Age Filter Max'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Distance Filter'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($location['Account'] as $account): ?>
		<tr>
			<td><?php echo $account['id']; ?></td>
			<td><?php echo $account['fb_email']; ?></td>
			<td><?php echo $account['fb_password']; ?></td>
			<td><?php echo $account['fb_id']; ?></td>
			<td><?php echo $account['fb_token']; ?></td>
			<td><?php echo $account['tinder_token']; ?></td>
			<td><?php echo $account['last_activity_date']; ?></td>
			<td><?php echo $account['like_reminings']; ?></td>
			<td><?php echo $account['superlike_reminings']; ?></td>
			<td><?php echo $account['superlike_reset_at']; ?></td>
			<td><?php echo $account['bio']; ?></td>
			<td><?php echo $account['age_filter_min']; ?></td>
			<td><?php echo $account['age_filter_max']; ?></td>
			<td><?php echo $account['gender']; ?></td>
			<td><?php echo $account['distance_filter']; ?></td>
			<td><?php echo $account['user_id']; ?></td>
			<td><?php echo $account['location_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'accounts', 'action' => 'view', $account['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'accounts', 'action' => 'edit', $account['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'accounts', 'action' => 'delete', $account['id']), array('confirm' => __('Are you sure you want to delete # %s?', $account['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Girls'); ?></h3>
	<?php if (!empty($location['Girl'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __(' Id'); ?></th>
		<th><?php echo __('Bio'); ?></th>
		<th><?php echo __('Photos'); ?></th>
		<th><?php echo __('Instagram'); ?></th>
		<th><?php echo __('Birth Date'); ?></th>
		<th><?php echo __('Ping Time'); ?></th>
		<th><?php echo __('Datetime'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($location['Girl'] as $girl): ?>
		<tr>
			<td><?php echo $girl['id']; ?></td>
			<td><?php echo $girl['name']; ?></td>
			<td><?php echo $girl['_id']; ?></td>
			<td><?php echo $girl['bio']; ?></td>
			<td><?php echo $girl['photos']; ?></td>
			<td><?php echo $girl['instagram']; ?></td>
			<td><?php echo $girl['birth_date']; ?></td>
			<td><?php echo $girl['ping_time']; ?></td>
			<td><?php echo $girl['datetime']; ?></td>
			<td><?php echo $girl['location_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'girls', 'action' => 'view', $girl['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'girls', 'action' => 'edit', $girl['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'girls', 'action' => 'delete', $girl['id']), array('confirm' => __('Are you sure you want to delete # %s?', $girl['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Girl'), array('controller' => 'girls', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
