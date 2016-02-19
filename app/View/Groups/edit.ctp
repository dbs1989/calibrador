<div class="groups form">
<?php echo $this->Form->create('Group'); ?>
	<fieldset>
		<legend><?php echo __('Editar Grupo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input(
			'description',
			array('label' => 'Descrição')
		);
		echo $this->Form->input(
			'deleted',
			array('label' => 'Excluído')
		);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Cadastrar')); ?>
</div>
