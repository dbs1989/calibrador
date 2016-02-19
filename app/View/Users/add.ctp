<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Usuário'); ?></legend>
	<?php
		echo $this->Form->input('name',
			array('label' => 'Nome')
		);
		echo $this->Form->input('login');
		echo $this->Form->input('password',
			array('label' => 'Senha')
		);
		echo $this->Form->input('group_id',
			array('label' => 'Grupo')
		);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Cadastrar')); ?>
</div>
