<?php
App::uses('AppModel', 'Model');
/**
 * Message Model
 *
 * @property Girl $Girl
 * @property Account $Account
 */
class Message extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'Messages';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'message';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Girl' => array(
			'className' => 'Girl',
			'foreignKey' => 'girl_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Account' => array(
			'className' => 'Account',
			'foreignKey' => 'account_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
