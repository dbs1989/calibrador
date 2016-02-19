<div class="calibrations form">
<?php echo $this->Form->create('Calibration'); ?>
	<fieldset>
		<legend><?php echo __('Calibração'); ?></legend>
	<?php
		echo $this->Form->input('equipment_id',
			array('label' => 'Equipamento')
		);
		echo $this->Form->input('user_id');
		echo $this->Form->input('physicalquantity_id',
			array('label' => 'Grandeza Física')
		);
		echo $this->Form->input('valueInitialphysicalquantity',
			array('label' => 'Valor Inicial da Quantidade Física')
		);
		echo $this->Form->input('valuefinalphysicalquantity',
			array('label' => 'Valor Final da Quantidade Física')
		);
		echo $this->Form->input('amountcalibration',
			array('label' => 'Quantidade de Calibração')
		);
		echo $this->Form->input('degreepolynomial',
			array('label' => 'Grau do Polinômio')
		);
		echo $this->Form->input('typeincrement_id',
			array('label' => 'Tipo de Incremento')
		);
		echo $this->Form->input('valueincrement',
			array('label' => 'Valor do Incremento')
		);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Cadastrar')); ?>
</div>