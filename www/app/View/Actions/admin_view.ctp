<div class="actions view">
<h2><?php echo __('Action'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($action['Action']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Like'); ?></dt>
		<dd>
			<?php echo h($action['Action']['like']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Superlike'); ?></dt>
		<dd>
			<?php echo h($action['Action']['superlike']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pass'); ?></dt>
		<dd>
			<?php echo h($action['Action']['pass']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Match'); ?></dt>
		<dd>
			<?php echo h($action['Action']['match']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Match Id'); ?></dt>
		<dd>
			<?php echo h($action['Action']['match_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($action['Account']['fb_email'], array('controller' => 'accounts', 'action' => 'view', $action['Account']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Girl'); ?></dt>
		<dd>
			<?php echo $this->Html->link($action['Girl']['name'], array('controller' => 'girls', 'action' => 'view', $action['Girl']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Action'), array('action' => 'edit', $action['Action']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Action'), array('action' => 'delete', $action['Action']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $action['Action']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Actions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Girls'), array('controller' => 'girls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Girl'), array('controller' => 'girls', 'action' => 'add')); ?> </li>
	</ul>
</div>
