<div class="namePrefixes index">
	<h2><?php echo __('Name Prefixes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('long_name'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($namePrefixes as $namePrefix): ?>
	<tr>
		<td><?php echo h($namePrefix['NamePrefix']['id']); ?>&nbsp;</td>
		<td><?php echo h($namePrefix['NamePrefix']['name']); ?>&nbsp;</td>
		<td><?php echo h($namePrefix['NamePrefix']['long_name']); ?>&nbsp;</td>
		<td><?php echo h($namePrefix['NamePrefix']['status']); ?>&nbsp;</td>
		<td><?php echo h($namePrefix['NamePrefix']['created']); ?>&nbsp;</td>
		<td><?php echo h($namePrefix['NamePrefix']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $namePrefix['NamePrefix']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $namePrefix['NamePrefix']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $namePrefix['NamePrefix']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $namePrefix['NamePrefix']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Name Prefix'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
