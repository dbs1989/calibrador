<?php
App::uses('AppModel', 'Model');
/**
 * Calibration Model
 *
 * @property Equipment $Equipment
 * @property User $User
 * @property Physicalquantity $Physicalquantity
 * @property Typeincrement $Typeincrement
 * @property Measurement $Measurement
 */
class Calibration extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'valueInitialphysicalquantity' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valuefinalphysicalquantity' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'amountcalibration' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'degreepolynomial' => array(
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
		'Equipment' => array(
			'className' => 'Equipment',
			'foreignKey' => 'equipment_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Physicalquantity' => array(
			'className' => 'Physicalquantity',
			'foreignKey' => 'physicalquantity_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Typeincrement' => array(
			'className' => 'Typeincrement',
			'foreignKey' => 'typeincrement_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Measurement' => array(
			'className' => 'Measurement',
			'foreignKey' => 'calibration_id',
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
