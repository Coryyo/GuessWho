<?php
App::uses('AppModel', 'Model');
/**
 * Utilisateur Model
 *
 */
class Utilisateur extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'utilisateur';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_utilisateur';

}
