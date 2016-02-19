<div class="typeequipments view">
<h2><?php echo __('Informações do  Tipo de Equipamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($typeequipment['Typeequipment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descrição'); ?></dt>
		<dd>
			<?php echo h($typeequipment['Typeequipment']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data de Registro'); ?></dt>
		<dd>
			<?php echo h($typeequipment['Typeequipment']['dateregister']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Excluído'); ?></dt>
		<dd>
			<?php echo ($typeequipment['Typeequipment']['deleted']==false?"não":"sim"); ?>
			&nbsp;
		</dd>
	</dl>
	<div class="related">
		<h3><?php echo __('Equipamentos Relacionados'); ?></h3>
		<?php if (!empty($typeequipment['Equipment'])): ?>
			<table cellpadding = "0" cellspacing = "0">
				<tr>
					<th><?php echo __('Id'); ?></th>
					<th><?php echo __('Brand'); ?></th>
					<th><?php echo __('Model'); ?></th>
					<th><?php echo __('Measurementuncertainty'); ?></th>
					<th><?php echo __('Identification'); ?></th>
					<th><?php echo __('Typeequipment Id'); ?></th>
					<th><?php echo __('Dateregister'); ?></th>
					<th><?php echo __('Deleted'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($typeequipment['Equipment'] as $equipment): ?>
					<tr>
						<td><?php echo $equipment['id']; ?></td>
						<td><?php echo $equipment['brand']; ?></td>
						<td><?php echo $equipment['model']; ?></td>
						<td><?php echo $equipment['measurementuncertainty']; ?></td>
						<td><?php echo $equipment['identification']; ?></td>
						<td><?php echo $equipment['typeequipment_id']; ?></td>
						<td><?php echo $equipment['dateregister']; ?></td>
						<td><?php echo $equipment['deleted']; ?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('Ver'), array('controller' => 'equipment', 'action' => 'view', $equipment['id'])); ?>
							<?php echo $this->Html->link(__('Editar'), array('controller' => 'equipment', 'action' => 'edit', $equipment['id'])); ?>
							<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'equipment', 'action' => 'delete', $equipment['id']), array(), __('Tem Certeza # %s?', $equipment['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
		<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Adicionar Equipamento'), array('controller' => 'equipment', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

