<div class="typeequipments form">
<?php echo $this->Form->create('Typeequipment'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Tipo de Equipamento'); ?></legend>
	<?php
		echo $this->Form->input(
			'description',
			array('label' => 'Descrição')
	);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Cadastrar')); ?>
</div>
