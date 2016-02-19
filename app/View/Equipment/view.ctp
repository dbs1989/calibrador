<div class="equipment view">
<h2><?php echo __('Informações do Equipamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($equipment['Equipment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marca'); ?></dt>
		<dd>
			<?php echo h($equipment['Equipment']['brand']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modelo'); ?></dt>
		<dd>
			<?php echo h($equipment['Equipment']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Incerteza de Medição'); ?></dt>
		<dd>
			<?php echo h($equipment['Equipment']['measurementuncertainty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identificação'); ?></dt>
		<dd>
			<?php echo h($equipment['Equipment']['identification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo de Equipamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($equipment['Typeequipment']['id'], array('controller' => 'typeequipments', 'action' => 'view', $equipment['Typeequipment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data de Registro'); ?></dt>
		<dd>
			<?php echo h($equipment['Equipment']['dateregister']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Excluído'); ?></dt>
		<dd>
			<?php echo ($equipment['Equipment']['deleted']==false?"não":"sim"); ?>
			&nbsp;
		</dd>
	</dl>
</div>
