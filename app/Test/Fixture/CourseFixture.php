<?php
/**
 * Course Fixture
 */
class CourseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'faculty_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'course_code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024),
		'credit' => array('type' => 'integer', 'null' => true, 'default' => null),
		'price' => array('type' => 'decimal', 'null' => true, 'default' => null),
		'detail' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1073741824),
		'status' => array('type' => 'string', 'null' => true, 'default' => null),
		'created' => array('type' => 'text', 'null' => true, 'default' => null),
		'modified' => array('type' => 'text', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'fki_faculty_id' => array('unique' => false, 'column' => 'faculty_id')
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
			'course_code' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'credit' => 1,
			'price' => '',
			'detail' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'status' => 'Lorem ipsum dolor sit amet',
			'created' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'modified' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
