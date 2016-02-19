<div class="typeincrements form">
<?php echo $this->Form->create('Typeincrement'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar  Tipo de Incremento'); ?></legend>
	<?php
		echo $this->Form->input('description',
			array('label' => 'Descrição')
		);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Cadastrar')); ?>
</div>