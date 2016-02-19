<div class="calibrations index">
	<h2><?php echo __('Calibrations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('equipment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('dateregister'); ?></th>
			<th><?php echo $this->Paginator->sort('deleted'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('physicalquantity_id'); ?></th>
			<th><?php echo $this->Paginator->sort('valueInitialphysicalquantity'); ?></th>
			<th><?php echo $this->Paginator->sort('valuefinalphysicalquantity'); ?></th>
			<th><?php echo $this->Paginator->sort('amountcalibration'); ?></th>
			<th><?php echo $this->Paginator->sort('degreepolynomial'); ?></th>
			<th><?php echo $this->Paginator->sort('typeincrement_id'); ?></th>
			<th><?php echo $this->Paginator->sort('valueincrement'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($calibrations as $calibration): ?>
	<tr>
		<td><?php echo h($calibration['Calibration']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($calibration['Equipment']['id'], array('controller' => 'equipment', 'action' => 'view', $calibration['Equipment']['id'])); ?>
		</td>
		<td><?php echo h($calibration['Calibration']['dateregister']); ?>&nbsp;</td>
		<td><?php echo h($calibration['Calibration']['deleted']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($calibration['User']['name'], array('controller' => 'users', 'action' => 'view', $calibration['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($calibration['Physicalquantity']['id'], array('controller' => 'physicalquantities', 'action' => 'view', $calibration['Physicalquantity']['id'])); ?>
		</td>
		<td><?php echo h($calibration['Calibration']['valueInitialphysicalquantity']); ?>&nbsp;</td>
		<td><?php echo h($calibration['Calibration']['valuefinalphysicalquantity']); ?>&nbsp;</td>
		<td><?php echo h($calibration['Calibration']['amountcalibration']); ?>&nbsp;</td>
		<td><?php echo h($calibration['Calibration']['degreepolynomial']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($calibration['Typeincrement']['id'], array('controller' => 'typeincrements', 'action' => 'view', $calibration['Typeincrement']['id'])); ?>
		</td>
		<td><?php echo h($calibration['Calibration']['valueincrement']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $calibration['Calibration']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $calibration['Calibration']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $calibration['Calibration']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $calibration['Calibration']['id']))); ?>
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