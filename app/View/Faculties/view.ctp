<div class="faculties view">
<h2><?php echo __('Faculty'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($faculty['Faculty']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Faculty Code'); ?></dt>
		<dd>
			<?php echo h($faculty['Faculty']['faculty_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($faculty['Faculty']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detail'); ?></dt>
		<dd>
			<?php echo h($faculty['Faculty']['detail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($faculty['Faculty']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($faculty['Faculty']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($faculty['Faculty']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Faculty'), array('action' => 'edit', $faculty['Faculty']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Faculty'), array('action' => 'delete', $faculty['Faculty']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $faculty['Faculty']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Faculties'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faculty'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Courses'); ?></h3>
	<?php if (!empty($faculty['Course'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Faculty Id'); ?></th>
		<th><?php echo __('Course Code'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Credit'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Detail'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($faculty['Course'] as $course): ?>
		<tr>
			<td><?php echo $course['id']; ?></td>
			<td><?php echo $course['faculty_id']; ?></td>
			<td><?php echo $course['course_code']; ?></td>
			<td><?php echo $course['name']; ?></td>
			<td><?php echo $course['credit']; ?></td>
			<td><?php echo $course['price']; ?></td>
			<td><?php echo $course['detail']; ?></td>
			<td><?php echo $course['status']; ?></td>
			<td><?php echo $course['created']; ?></td>
			<td><?php echo $course['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'courses', 'action' => 'view', $course['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'courses', 'action' => 'edit', $course['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'courses', 'action' => 'delete', $course['id']), array('confirm' => __('Are you sure you want to delete # %s?', $course['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($faculty['User'])): ?>
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
	<?php foreach ($faculty['User'] as $user): ?>
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
