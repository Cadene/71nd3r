<div class="girls index">
	<h2><?php echo __('Girls'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bio'); ?></th>
			<th><?php echo $this->Paginator->sort('photos'); ?></th>
			<th><?php echo $this->Paginator->sort('instagram'); ?></th>
			<th><?php echo $this->Paginator->sort('birth_date'); ?></th>
			<th><?php echo $this->Paginator->sort('ping_time'); ?></th>
			<th><?php echo $this->Paginator->sort('datetime'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($girls as $girl): ?>
	<tr>
		<td><?php echo h($girl['Girl']['id']); ?>&nbsp;</td>
		<td><?php echo h($girl['Girl']['name']); ?>&nbsp;</td>
		<td><?php echo h($girl['Girl']['_id']); ?>&nbsp;</td>
		<td><?php echo h($girl['Girl']['bio']); ?>&nbsp;</td>
		<td><?php echo h($girl['Girl']['photos']); ?>&nbsp;</td>
		<td><?php echo h($girl['Girl']['instagram']); ?>&nbsp;</td>
		<td><?php echo h($girl['Girl']['birth_date']); ?>&nbsp;</td>
		<td><?php echo h($girl['Girl']['ping_time']); ?>&nbsp;</td>
		<td><?php echo h($girl['Girl']['datetime']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($girl['Location']['name'], array('controller' => 'locations', 'action' => 'view', $girl['Location']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $girl['Girl']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $girl['Girl']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $girl['Girl']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $girl['Girl']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Girl'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actions'), array('controller' => 'actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action'), array('controller' => 'actions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
	</ul>
</div>
