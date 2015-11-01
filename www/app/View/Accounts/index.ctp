<div class="accounts index">
	<h2><?php echo __('Accounts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fb_email'); ?></th>
			<th><?php echo $this->Paginator->sort('fb_password'); ?></th>
			<th><?php echo $this->Paginator->sort('fb_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fb_token'); ?></th>
			<th><?php echo $this->Paginator->sort('tinder_token'); ?></th>
			<th><?php echo $this->Paginator->sort('last_activity_date'); ?></th>
			<th><?php echo $this->Paginator->sort('like_reminings'); ?></th>
			<th><?php echo $this->Paginator->sort('superlike_reminings'); ?></th>
			<th><?php echo $this->Paginator->sort('superlike_reset_at'); ?></th>
			<th><?php echo $this->Paginator->sort('bio'); ?></th>
			<th><?php echo $this->Paginator->sort('age_filter_min'); ?></th>
			<th><?php echo $this->Paginator->sort('age_filter_max'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('distance_filter'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($accounts as $account): ?>
	<tr>
		<td><?php echo h($account['Account']['id']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['fb_email']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['fb_password']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['fb_id']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['fb_token']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['tinder_token']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['last_activity_date']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['like_reminings']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['superlike_reminings']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['superlike_reset_at']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['bio']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['age_filter_min']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['age_filter_max']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['gender']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['distance_filter']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($account['User']['username'], array('controller' => 'users', 'action' => 'view', $account['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($account['Location']['name'], array('controller' => 'locations', 'action' => 'view', $account['Location']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $account['Account']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $account['Account']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $account['Account']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $account['Account']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Account'), array('action' => 'add')); ?></li>
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
