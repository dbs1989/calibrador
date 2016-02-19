<div class="calibrations view">
<h2><?php echo __('Calibration'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($calibration['Calibration']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Equipment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($calibration['Equipment']['id'], array('controller' => 'equipment', 'action' => 'view', $calibration['Equipment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dateregister'); ?></dt>
		<dd>
			<?php echo h($calibration['Calibration']['dateregister']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($calibration['Calibration']['deleted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($calibration['User']['name'], array('controller' => 'users', 'action' => 'view', $calibration['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Physicalquantity'); ?></dt>
		<dd>
			<?php echo $this->Html->link($calibration['Physicalquantity']['id'], array('controller' => 'physicalquantities', 'action' => 'view', $calibration['Physicalquantity']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ValueInitialphysicalquantity'); ?></dt>
		<dd>
			<?php echo h($calibration['Calibration']['valueInitialphysicalquantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valuefinalphysicalquantity'); ?></dt>
		<dd>
			<?php echo h($calibration['Calibration']['valuefinalphysicalquantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amountcalibration'); ?></dt>
		<dd>
			<?php echo h($calibration['Calibration']['amountcalibration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Degreepolynomial'); ?></dt>
		<dd>
			<?php echo h($calibration['Calibration']['degreepolynomial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Typeincrement'); ?></dt>
		<dd>
			<?php echo $this->Html->link($calibration['Typeincrement']['id'], array('controller' => 'typeincrements', 'action' => 'view', $calibration['Typeincrement']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valueincrement'); ?></dt>
		<dd>
			<?php echo h($calibration['Calibration']['valueincrement']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Calibration'), array('action' => 'edit', $calibration['Calibration']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Calibration'), array('action' => 'delete', $calibration['Calibration']['id']), array(), __('Are you sure you want to delete # %s?', $calibration['Calibration']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Calibrations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calibration'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Measurements'); ?></h3>
	<?php if (!empty($calibration['Measurement'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Referencetemperature'); ?></th>
		<th><?php echo __('Measuredtemperature'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th><?php echo __('Dateregister'); ?></th>
		<th><?php echo __('Calibration Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($calibration['Measurement'] as $measurement): ?>
		<tr>
			<td><?php echo $measurement['id']; ?></td>
			<td><?php echo $measurement['referencetemperature']; ?></td>
			<td><?php echo $measurement['measuredtemperature']; ?></td>
			<td><?php echo $measurement['deleted']; ?></td>
			<td><?php echo $measurement['dateregister']; ?></td>
			<td><?php echo $measurement['calibration_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'measurements', 'action' => 'view', $measurement['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'measurements', 'action' => 'edit', $measurement['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'measurements', 'action' => 'delete', $measurement['id']), array(), __('Are you sure you want to delete # %s?', $measurement['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Measurement'), array('controller' => 'measurements', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
