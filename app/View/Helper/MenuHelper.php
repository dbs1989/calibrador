<?php
/**
 * Menu Helper class file
 *
 * Styles a list item link based on the currently active controller.
 *
 * Date: 2012 06 27
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 * 
 * @link          https://github.com/jordanvg/cakephp-menu-helper
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('AppHelper', 'View/Helper');
class MenuHelper extends AppHelper {
    public function printMenu(){
		$html = "";
		$html .= '<li>'.$this->Html->link(__('List Usuarios'), array('action' => 'index')).'</li>';
		$html .= '<li>'.$this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')).'</li>';
		
		return $html;
	}
}