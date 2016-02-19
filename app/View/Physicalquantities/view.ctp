<div class="physicalquantities view">
<h2><?php echo __('Informações da Grandeza Física'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($physicalquantity['Physicalquantity']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descrição'); ?></dt>
		<dd>
			<?php echo h($physicalquantity['Physicalquantity']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Excluído'); ?></dt>
		<dd>
			<?php echo ($physicalquantity['Physicalquantity']['deleted']==false?"não":"sim"); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data de Registro'); ?></dt>
		<dd>
			<?php echo h($physicalquantity['Physicalquantity']['dateregister']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
