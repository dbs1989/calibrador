<div class="equipment index">
	<h2><?php echo __('Equipamento'); ?></h2>
	<div class="actions">
		<?php echo $this->Html->link(__('Adicionar'), array('action' => 'add'));?>
	</div>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('brand', 'Marca'); ?></th>
			<th><?php echo $this->Paginator->sort('model', 'Modelo'); ?></th>
			<th><?php echo $this->Paginator->sort('measurementuncertainty', 'Incerteza de Medição'); ?></th>
			<th><?php echo $this->Paginator->sort('identification', 'Identificação'); ?></th>
			<th><?php echo $this->Paginator->sort('typeequipment_id', 'Tipo Equipamento'); ?></th>
			<th><?php echo $this->Paginator->sort('dateregister', 'Data de Registro'); ?></th>
			<th><?php echo $this->Paginator->sort('deleted', 'Excluído'); ?></th>
			<th class="actions"><?php echo __('Ação'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($equipment as $equipment): ?>
	<tr>
		<td><?php echo h($equipment['Equipment']['id']); ?>&nbsp;</td>
		<td><?php echo h($equipment['Equipment']['brand']); ?>&nbsp;</td>
		<td><?php echo h($equipment['Equipment']['model']); ?>&nbsp;</td>
		<td><?php echo h($equipment['Equipment']['measurementuncertainty']); ?>&nbsp;</td>
		<td><?php echo h($equipment['Equipment']['identification']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($equipment['Typeequipment']['description'], array('controller' => 'typeequipments', 'action' => 'view', $equipment['Typeequipment']['id'])); ?>
		</td>
		<td><?php echo h($equipment['Equipment']['dateregister']); ?>&nbsp;</td>
		<?php
		if($equipment['Equipment']['deleted'] == false)
			echo "<td>não&nbsp;</td>";
		else
			echo "<td>sim&nbsp;</td> ";
		?>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $equipment['Equipment']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $equipment['Equipment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $equipment['Equipment']['id']), array('confirm' => __('Tem Certeza # %s?', $equipment['Equipment']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
		<?php
		echo $this->Paginator->counter(array(
			'format' => __('Página {:page} of {:pages}')
		));
		?>	</p>
	<div class="paging">
		<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('próxima') . ' >', array(), null, array('class' => 'next disabled'));
		?>
	</div>
</div>

