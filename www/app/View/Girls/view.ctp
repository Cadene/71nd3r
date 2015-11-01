<div class="girls view">
<h2><?php echo __('Girl'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($girl['Girl']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($girl['Girl']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __(' Id'); ?></dt>
		<dd>
			<?php echo h($girl['Girl']['_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bio'); ?></dt>
		<dd>
			<?php echo h($girl['Girl']['bio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photos'); ?></dt>
		<dd>
			<?php echo h($girl['Girl']['photos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instagram'); ?></dt>
		<dd>
			<?php echo h($girl['Girl']['instagram']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birth Date'); ?></dt>
		<dd>
			<?php echo h($girl['Girl']['birth_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ping Time'); ?></dt>
		<dd>
			<?php echo h($girl['Girl']['ping_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datetime'); ?></dt>
		<dd>
			<?php echo h($girl['Girl']['datetime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($girl['Location']['name'], array('controller' => 'locations', 'action' => 'view', $girl['Location']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Girl'), array('action' => 'edit', $girl['Girl']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Girl'), array('action' => 'delete', $girl['Girl']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $girl['Girl']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Girls'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Girl'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actions'), array('controller' => 'actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action'), array('controller' => 'actions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Actions'); ?></h3>
	<?php if (!empty($girl['Action'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Like'); ?></th>
		<th><?php echo __('Superlike'); ?></th>
		<th><?php echo __('Pass'); ?></th>
		<th><?php echo __('Match'); ?></th>
		<th><?php echo __('Match Id'); ?></th>
		<th><?php echo __('Account Id'); ?></th>
		<th><?php echo __('Girl Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($girl['Action'] as $action): ?>
		<tr>
			<td><?php echo $action['id']; ?></td>
			<td><?php echo $action['like']; ?></td>
			<td><?php echo $action['superlike']; ?></td>
			<td><?php echo $action['pass']; ?></td>
			<td><?php echo $action['match']; ?></td>
			<td><?php echo $action['match_id']; ?></td>
			<td><?php echo $action['account_id']; ?></td>
			<td><?php echo $action['girl_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'actions', 'action' => 'view', $action['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'actions', 'action' => 'edit', $action['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'actions', 'action' => 'delete', $action['id']), array('confirm' => __('Are you sure you want to delete # %s?', $action['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Action'), array('controller' => 'actions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Messages'); ?></h3>
	<?php if (!empty($girl['Message'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Message'); ?></th>
		<th><?php echo __('Sent Date'); ?></th>
		<th><?php echo __('Girl Id'); ?></th>
		<th><?php echo __('Account Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($girl['Message'] as $message): ?>
		<tr>
			<td><?php echo $message['id']; ?></td>
			<td><?php echo $message['message']; ?></td>
			<td><?php echo $message['sent_date']; ?></td>
			<td><?php echo $message['girl_id']; ?></td>
			<td><?php echo $message['account_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'messages', 'action' => 'view', $message['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'messages', 'action' => 'edit', $message['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'messages', 'action' => 'delete', $message['id']), array('confirm' => __('Are you sure you want to delete # %s?', $message['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
