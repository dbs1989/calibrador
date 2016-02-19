<?php
App::uses('AppModel', 'Model');
/**
 * Measurement Model
 *
 * @property Calibration $Calibration
 */
class Measurement extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'referencetemperature' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'measuredtemperature' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Calibration' => array(
			'className' => 'Calibration',
			'foreignKey' => 'calibration_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
