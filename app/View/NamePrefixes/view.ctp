<div class="namePrefixes view">
<h2><?php echo __('Name Prefix'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($namePrefix['NamePrefix']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($namePrefix['NamePrefix']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Long Name'); ?></dt>
		<dd>
			<?php echo h($namePrefix['NamePrefix']['long_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($namePrefix['NamePrefix']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($namePrefix['NamePrefix']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($namePrefix['NamePrefix']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Name Prefix'), array('action' => 'edit', $namePrefix['NamePrefix']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Name Prefix'), array('action' => 'delete', $namePrefix['NamePrefix']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $namePrefix['NamePrefix']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Name Prefixes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Name Prefix'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($namePrefix['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Faculty Id'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Ref Code'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Name Prefix Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Office Phone'); ?></th>
		<th><?php echo __('Mobile Phone'); ?></th>
		<th><?php echo __('Birth Date'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Moo'); ?></th>
		<th><?php echo __('Road'); ?></th>
		<th><?php echo __('Sub District'); ?></th>
		<th><?php echo __('District'); ?></th>
		<th><?php echo __('Province'); ?></th>
		<th><?php echo __('Zipcode'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Picture Path'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($namePrefix['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['faculty_id']; ?></td>
			<td><?php echo $user['role_id']; ?></td>
			<td><?php echo $user['ref_code']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['name_prefix_id']; ?></td>
			<td><?php echo $user['first_name']; ?></td>
			<td><?php echo $user['last_name']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['office_phone']; ?></td>
			<td><?php echo $user['mobile_phone']; ?></td>
			<td><?php echo $user['birth_date']; ?></td>
			<td><?php echo $user['address']; ?></td>
			<td><?php echo $user['moo']; ?></td>
			<td><?php echo $user['road']; ?></td>
			<td><?php echo $user['sub_district']; ?></td>
			<td><?php echo $user['district']; ?></td>
			<td><?php echo $user['province']; ?></td>
			<td><?php echo $user['zipcode']; ?></td>
			<td><?php echo $user['status']; ?></td>
			<td><?php echo $user['picture_path']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
