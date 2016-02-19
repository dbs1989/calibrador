<div class="groups form">
<?php echo $this->Form->create('Group'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Grupo'); ?></legend>
	<?php
		echo $this->Form->input(
			'description',
			array('label' => 'Descrição')
		);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Cadastrar')); ?>
</div>
