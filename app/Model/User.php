<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
/**
 * User Model
 *
 * @property Faculty $Faculty
 * @property Role $Role
 * @property NamePrefix $NamePrefix
 * @property Course $Course
 */
class User extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

	public function beforeSave($options = array()) {
		$data1 = $this->data[$this->alias]['password'];
		if (isset($data1)) {
			if (isset($this->data[$this->alias]['id'])) {
				$id = $this->data[$this->alias]['id'];
				$user = $this->findById($id);
			} else {
				$id = false;
			}
			if (!$id || $user['User']['password'] != $this->data[$this->alias]['password']) {
				$passwordHasher = new BlowfishPasswordHasher();
				$this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
			}
		}
		return true;
	}
/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Faculty' => array(
			'className' => 'Faculty',
			'foreignKey' => 'faculty_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'NamePrefix' => array(
			'className' => 'NamePrefix',
			'foreignKey' => 'name_prefix_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	
	

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Course' => array(
			'className' => 'Course',
			'joinTable' => 'courses_users',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'course_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
