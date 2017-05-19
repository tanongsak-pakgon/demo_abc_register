<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('faculty_id');
		echo $this->Form->input('role_id');
		echo $this->Form->input('ref_code');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('name_prefix_id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('email');
		echo $this->Form->input('office_phone');
		echo $this->Form->input('mobile_phone');
		echo $this->Form->input('birth_date');
		echo $this->Form->input('address');
		echo $this->Form->input('moo');
		echo $this->Form->input('road');
		echo $this->Form->input('sub_district');
		echo $this->Form->input('district');
		echo $this->Form->input('province');
		echo $this->Form->input('zipcode');
		echo $this->Form->input('status');
		echo $this->Form->input('picture_path');
		echo $this->Form->input('Course');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('User.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Faculties'), array('controller' => 'faculties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faculty'), array('controller' => 'faculties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Name Prefixes'), array('controller' => 'name_prefixes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Name Prefix'), array('controller' => 'name_prefixes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
