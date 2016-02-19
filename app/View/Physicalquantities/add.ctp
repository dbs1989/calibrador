<div class="physicalquantities form">
<?php echo $this->Form->create('Physicalquantity'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Grandeza Física'); ?></legend>
	<?php
		echo $this->Form->input(
			'description',
			array('label' => 'Descrição')
		);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Cadastrar')); ?>
</div>