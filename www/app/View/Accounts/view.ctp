<div class="accounts view">
<h2><?php echo __('Account'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($account['Account']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fb Email'); ?></dt>
		<dd>
			<?php echo h($account['Account']['fb_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fb Password'); ?></dt>
		<dd>
			<?php echo h($account['Account']['fb_password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fb Id'); ?></dt>
		<dd>
			<?php echo h($account['Account']['fb_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fb Token'); ?></dt>
		<dd>
			<?php echo h($account['Account']['fb_token']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tinder Token'); ?></dt>
		<dd>
			<?php echo h($account['Account']['tinder_token']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Activity Date'); ?></dt>
		<dd>
			<?php echo h($account['Account']['last_activity_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Like Reminings'); ?></dt>
		<dd>
			<?php echo h($account['Account']['like_reminings']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Superlike Reminings'); ?></dt>
		<dd>
			<?php echo h($account['Account']['superlike_reminings']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Superlike Reset At'); ?></dt>
		<dd>
			<?php echo h($account['Account']['superlike_reset_at']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bio'); ?></dt>
		<dd>
			<?php echo h($account['Account']['bio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age Filter Min'); ?></dt>
		<dd>
			<?php echo h($account['Account']['age_filter_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age Filter Max'); ?></dt>
		<dd>
			<?php echo h($account['Account']['age_filter_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($account['Account']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Distance Filter'); ?></dt>
		<dd>
			<?php echo h($account['Account']['distance_filter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($account['User']['username'], array('controller' => 'users', 'action' => 'view', $account['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($account['Location']['name'], array('controller' => 'locations', 'action' => 'view', $account['Location']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Account'), array('action' => 'edit', $account['Account']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Account'), array('action' => 'delete', $account['Account']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $account['Account']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Actions'); ?></h3>
	<?php if (!empty($account['Action'])): ?>
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
	<?php foreach ($account['Action'] as $action): ?>
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
	<?php if (!empty($account['Message'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Message'); ?></th>
		<th><?php echo __('Sent Date'); ?></th>
		<th><?php echo __('Girl Id'); ?></th>
		<th><?php echo __('Account Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($account['Message'] as $message): ?>
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
<div class="related">
	<h3><?php echo __('Related Photos'); ?></h3>
	<?php if (!empty($account['Photo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __(' Id'); ?></th>
		<th><?php echo __('Fb Id'); ?></th>
		<th><?php echo __('Order'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Account Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($account['Photo'] as $photo): ?>
		<tr>
			<td><?php echo $photo['id']; ?></td>
			<td><?php echo $photo['_id']; ?></td>
			<td><?php echo $photo['fb_id']; ?></td>
			<td><?php echo $photo['order']; ?></td>
			<td><?php echo $photo['url']; ?></td>
			<td><?php echo $photo['account_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'photos', 'action' => 'view', $photo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'photos', 'action' => 'edit', $photo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'photos', 'action' => 'delete', $photo['id']), array('confirm' => __('Are you sure you want to delete # %s?', $photo['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
