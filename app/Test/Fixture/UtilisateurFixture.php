<?php
/**
 * UtilisateurFixture
 *
 */
class UtilisateurFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'utilisateur';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_utilisateur' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nom' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'prenom' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'mail' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pseudo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'mdp' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_utilisateur', 'unique' => 1),
			'pseudo' => array('column' => 'pseudo', 'unique' => 1)
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
			'id_utilisateur' => 1,
			'nom' => 'Lorem ipsum dolor sit amet',
			'prenom' => 'Lorem ipsum dolor ',
			'mail' => 'Lorem ipsum dolor sit amet',
			'pseudo' => 'Lorem ipsum dolor ',
			'mdp' => 1
		),
	);

}
