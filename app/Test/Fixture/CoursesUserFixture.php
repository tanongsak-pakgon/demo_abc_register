<?php
/**
 * CoursesUser Fixture
 */
class CoursesUserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'user_id' => array('type' => 'biginteger', 'null' => true, 'default' => null),
		'course_id' => array('type' => 'biginteger', 'null' => true, 'default' => null),
		'days_attended' => array('type' => 'integer', 'null' => true, 'default' => null),
		'score' => array('type' => 'float', 'null' => true, 'default' => null),
		'grade' => array('type' => 'string', 'null' => true, 'default' => null),
		'status' => array('type' => 'string', 'null' => true, 'default' => null),
		'created' => array('type' => 'text', 'null' => true, 'default' => null),
		'modified' => array('type' => 'text', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'fki_course_id' => array('unique' => false, 'column' => 'course_id'),
			'fki_user_id' => array('unique' => false, 'column' => 'user_id')
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
			'id' => '',
			'user_id' => '',
			'course_id' => '',
			'days_attended' => 1,
			'score' => 1,
			'grade' => 'Lorem ipsum dolor sit amet',
			'status' => 'Lorem ipsum dolor sit amet',
			'created' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'modified' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
