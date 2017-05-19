<?php
/**
 * User Fixture
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'faculty_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'role_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'ref_code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32),
		'username' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150),
		'name_prefix_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150),
		'last_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
		'office_phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'mobile_phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
		'birth_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'moo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'road' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'sub_district' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'district' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'province' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'zipcode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'status' => array('type' => 'string', 'null' => true, 'default' => null),
		'picture_path' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200),
		'created' => array('type' => 'text', 'null' => true, 'default' => null),
		'modified' => array('type' => 'text', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'fki_faculties_id' => array('unique' => false, 'column' => 'faculty_id'),
			'fki_name_prefixes_id' => array('unique' => false, 'column' => 'name_prefix_id'),
			'fki_role_id' => array('unique' => false, 'column' => 'role_id')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'faculty_id' => 1,
			'role_id' => 1,
			'ref_code' => 'Lorem ipsum dolor sit amet',
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'name_prefix_id' => 1,
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'office_phone' => 'Lorem ipsum dolor sit amet',
			'mobile_phone' => 'Lorem ipsum dolor ',
			'birth_date' => '2017-05-17',
			'address' => 'Lorem ipsum dolor sit amet',
			'moo' => 'Lorem ipsum dolor sit amet',
			'road' => 'Lorem ipsum dolor sit amet',
			'sub_district' => 'Lorem ipsum dolor sit amet',
			'district' => 'Lorem ipsum dolor sit amet',
			'province' => 'Lorem ipsum dolor sit amet',
			'zipcode' => 'Lorem ipsum dolor sit amet',
			'status' => 'Lorem ipsum dolor sit amet',
			'picture_path' => 'Lorem ipsum dolor sit amet',
			'created' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'modified' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
