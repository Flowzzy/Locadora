<?php
/**
 * ClientsCopyFixture
 *
 */
class ClientsCopyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Copy_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Client_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Rstate_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'Copy_id', 'Rstate_id'), 'unique' => 1),
			'fk_Aluguers_has_Copies_Copies1_idx' => array('column' => 'Copy_id', 'unique' => 0),
			'fk_Clients_copy_Clients1_idx' => array('column' => 'Client_id', 'unique' => 0),
			'fk_Clients_copy_Rstates1_idx' => array('column' => 'Rstate_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'Copy_id' => 1,
			'Client_id' => 1,
			'Rstate_id' => 1
		),
	);

}
