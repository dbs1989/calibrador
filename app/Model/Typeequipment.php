<?php
App::uses('AppModel', 'Model');
/**
 * Typeequipment Model
 *
 * @property Equipment $Equipment
 */
class Typeequipment extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Equipment' => array(
			'className' => 'Equipment',
			'foreignKey' => 'typeequipment_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
