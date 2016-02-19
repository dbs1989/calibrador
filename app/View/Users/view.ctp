<div class="users view">
<h2><?php echo __('Informações do Usuário'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Login'); ?></dt>
		<dd>
			<?php echo h($user['User']['login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data de Registro'); ?></dt>
		<dd>
			<?php echo h($user['User']['dateregister']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Excluído'); ?></dt>
		<dd>
			<?php echo ($user['User']['deleted']==false?"não":"sim"); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['description'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>