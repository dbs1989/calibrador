<div class="typeequipments index">
	<h2><?php echo __('Tipo de Equipamento'); ?></h2>
	<div class="actions">
		<?php echo $this->Html->link(__('Adicionar'), array('action' => 'add'));?>
	</div>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('description', "Descrição"); ?></th>
			<th><?php echo $this->Paginator->sort('dateregister', "Data de registro"); ?></th>
			<th><?php echo $this->Paginator->sort('deleted', "Excluído"); ?></th>
			<th class="actions"><?php echo __('Ação'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($typeequipments as $typeequipment): ?>
	<tr>
		<td><?php echo h($typeequipment['Typeequipment']['id']); ?>&nbsp;</td>
		<td><?php echo h($typeequipment['Typeequipment']['description']); ?>&nbsp;</td>
		<td><?php echo h($typeequipment['Typeequipment']['dateregister']); ?>&nbsp;</td>
		<?php
		if($typeequipment['Typeequipment']['deleted'] == false)
			echo "<td>não&nbsp;</td>";
		else
			echo "<td>sim&nbsp;</td> ";
		?>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $typeequipment['Typeequipment']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $typeequipment['Typeequipment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $typeequipment['Typeequipment']['id']), array('confirm' => __('Tem certeza # %s?', $typeequipment['Typeequipment']['id']))); ?>
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
