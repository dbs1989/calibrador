<div class="users index">
	<h2><?php echo __('Usuários'); ?></h2>
	<div class="actions">
		<?php echo $this->Html->link(__('Adicionar'), array('action' => 'add'));?>
	</div>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('login'); ?></th>
			<th><?php echo $this->Paginator->sort('dateregister', 'Data de Registro'); ?></th>
			<th><?php echo $this->Paginator->sort('name', 'Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('deleted', 'Excluído'); ?></th>
			<th><?php echo $this->Paginator->sort('group_id', 'Grupo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['login']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['dateregister']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<?php
		if($user['User']['deleted'] == false)
			echo "<td>não&nbsp;</td>";
		else
			echo "<td>sim&nbsp;</td> ";
		?>
		<td>
			<?php echo $this->Html->link($user['Group']['description'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Tem certeza  # %s?', $user['User']['id']))); ?>
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
