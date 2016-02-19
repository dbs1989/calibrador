<div class="equipment form">
<?php echo $this->Form->create('Equipment'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Equipamento'); ?></legend>
	<?php
		echo $this->Form->input('brand',
			array('label' => 'Marca')
		);
		echo $this->Form->input('model',
			array('label' => 'Modelo')
		);
		echo $this->Form->input('measurementuncertainty',
			array('label' => 'Incerteza de Medição')
		);
		echo $this->Form->input('identification',
			array('label' => 'Identificação')
		);
		echo $this->Form->input('typeequipment_id',
			array('label' => 'Tipo Equipamento')
		);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Cadastrar')); ?>
</div>