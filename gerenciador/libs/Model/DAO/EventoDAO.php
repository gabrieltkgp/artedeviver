<?php
/** @package U2107658441::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("EventoMap.php");

/**
 * EventoDAO provides object-oriented access to the eventos table.  This
 * class is automatically generated by ClassBuilder.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the Model class which is extended from this DAO class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package U2107658441::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class EventoDAO extends Phreezable
{
	/** @var int */
	public $Id;

	/** @var string */
	public $Nome;

	/** @var string */
	public $Local;

	/** @var string */
	public $Endereco;

	/** @var string */
	public $Observacao;

	/** @var timestamp */
	public $Data;

	/** @var int */
	public $IdCidade;

	/** @var int */
	public $Privado;

	/** @var string */
	public $Link;

	/** @var string */
	public $Map;

	/** @var int */
	public $IdTipoEvento;



}
?>