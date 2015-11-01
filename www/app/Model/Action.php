<?php
App::uses('AppModel', 'Model');
/**
 * Action Model
 *
 * @property Account $Account
 * @property Girl $Girl
 */
class Action extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'Actions';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Account' => array(
			'className' => 'Account',
			'foreignKey' => 'account_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Girl' => array(
			'className' => 'Girl',
			'foreignKey' => 'girl_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
