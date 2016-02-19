<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo "Sistema Calibrador" ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo "Sistema Calibrador" ?></h1>
		</div>
		<div id="content">
			<div class="actions">
				<h3><?php echo __('Menu'); ?></h3>
				<ul>
					<li><?php echo $this->Html->link(__('Calibração'), array('controller' => 'calibrations', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Equipamento'), array('controller' => 'equipment', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Grandeza Física'), array('controller' => 'physicalquantities', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Grupos'), array('controller' => 'groups', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Tipo Incremento'), array('controller' => 'typeincrements', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Tipo Equipamento'), array('controller' => 'typeEquipments', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Usuários'), array('controller' => 'users', 'action' => 'index')); ?></li>
				</ul>
			</div>
			<div>
				<?php echo $this->Session->flash(); ?>

				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php /*echo $this->element('sql_dump'); */?>
</body>
</html>