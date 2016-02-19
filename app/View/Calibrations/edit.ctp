<div class="calibrations form">
<?php echo $this->Form->create('Calibration'); ?>
	<fieldset>
		<legend><?php echo __('Edit Calibration'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('equipment_id');
		echo $this->Form->input('dateregister');
		echo $this->Form->input('deleted');
		echo $this->Form->input('user_id');
		echo $this->Form->input('physicalquantity_id');
		echo $this->Form->input('valueInitialphysicalquantity');
		echo $this->Form->input('valuefinalphysicalquantity');
		echo $this->Form->input('amountcalibration');
		echo $this->Form->input('degreepolynomial');
		echo $this->Form->input('typeincrement_id');
		echo $this->Form->input('valueincrement');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Calibration.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Calibration.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Calibrations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Equipment'), array('controller' => 'equipment', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipment'), array('controller' => 'equipment', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Physicalquantities'), array('controller' => 'physicalquantities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Physicalquantity'), array('controller' => 'physicalquantities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Typeincrements'), array('controller' => 'typeincrements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Typeincrement'), array('controller' => 'typeincrements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Measurements'), array('controller' => 'measurements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Measurement'), array('controller' => 'measurements', 'action' => 'add')); ?> </li>
	</ul>
</div>
