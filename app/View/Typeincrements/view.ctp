<div class="typeincrements view">
<h2><?php echo __('Informações do Tipo de Incremento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($typeincrement['Typeincrement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descrição'); ?></dt>
		<dd>
			<?php echo h($typeincrement['Typeincrement']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Excluído'); ?></dt>
		<dd>
			<?php echo ($typeincrement['Typeincrement']['deleted']==false?"não":"sim"); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data de Registro'); ?></dt>
		<dd>
			<?php echo h($typeincrement['Typeincrement']['dateregister']); ?>
			&nbsp;
		</dd>
	</dl>
</div>