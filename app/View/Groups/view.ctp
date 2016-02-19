<div class="groups view">
<h2><?php echo __('Informações do Grupo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($group['Group']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descrição'); ?></dt>
		<dd>
			<?php echo h($group['Group']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Excluído'); ?></dt>
		<dd>
			<?php echo ($group['Group']['deleted']==false?"não":"sim"); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data de Registro'); ?></dt>
		<dd>
			<?php echo h($group['Group']['dateregister']); ?>
			&nbsp;
		</dd>
	</dl>
	<div class="related">
		<h3><?php echo __('Usuários Relacionados'); ?></h3>
		<?php if (!empty($group['User'])): ?>
			<table cellpadding = "0" cellspacing = "0">
				<tr>
					<th><?php echo __('Id'); ?></th>
					<th><?php echo __('Login'); ?></th>
					<th><?php echo __('Name'); ?></th>
					<th class="actions"><?php echo __('Ação'); ?></th>
				</tr>
				<?php foreach ($group['User'] as $user): ?>
					<tr>
						<td><?php echo $user['id']; ?></td>
						<td><?php echo $user['login']; ?></td>
						<td><?php echo $user['name']; ?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('Ver'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
							<?php echo $this->Html->link(__('Editar'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
							<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Tem certeza # %s?', $user['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
		<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Adicionar Usuário'), array('controller' => 'users', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

