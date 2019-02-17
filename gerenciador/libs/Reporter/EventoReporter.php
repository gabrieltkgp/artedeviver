<?php
/** @package    U2107658441::Reporter */

/** import supporting libraries */
require_once("verysimple/Phreeze/Reporter.php");

/**
 * This is an example Reporter based on the Evento object.  The reporter object
 * allows you to run arbitrary queries that return data which may or may not fith within
 * the data access API.  This can include aggregate data or subsets of data.
 *
 * Note that Reporters are read-only and cannot be used for saving data.
 *
 * @package U2107658441::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class EventoReporter extends Reporter
{

	// the properties in this class must match the columns returned by GetCustomQuery().
	// 'CustomFieldExample' is an example that is not part of the `eventos` table
	public $CustomFieldExample;

	public $Id;
	public $Nome;
	public $Local;
	public $Endereco;
	public $Observacao;
	public $Data;
	public $IdCidade;
	public $Privado;
	public $Link;
	public $Map;
	public $IdTipoEvento;

	/*
	* GetCustomQuery returns a fully formed SQL statement.  The result columns
	* must match with the properties of this reporter object.
	*
	* @see Reporter::GetCustomQuery
	* @param Criteria $criteria
	* @return string SQL statement
	*/
	static function GetCustomQuery($criteria)
	{
		$sql = "select
			'custom value here...' as CustomFieldExample
			,`eventos`.`id` as Id
			,`eventos`.`nome` as Nome
			,`eventos`.`local` as Local
			,`eventos`.`endereco` as Endereco
			,`eventos`.`observacao` as Observacao
			,`eventos`.`data` as Data
			,`eventos`.`id_cidade` as IdCidade
			,`eventos`.`privado` as Privado
			,`eventos`.`link` as Link
			,`eventos`.`map` as Map
			,`eventos`.`id_tipo_evento` as IdTipoEvento
		from `eventos`";

		// the criteria can be used or you can write your own custom logic.
		// be sure to escape any user input with $criteria->Escape()
		$sql .= $criteria->GetWhere();
		$sql .= $criteria->GetOrder();

		return $sql;
	}
	
	/*
	* GetCustomCountQuery returns a fully formed SQL statement that will count
	* the results.  This query must return the correct number of results that
	* GetCustomQuery would, given the same criteria
	*
	* @see Reporter::GetCustomCountQuery
	* @param Criteria $criteria
	* @return string SQL statement
	*/
	static function GetCustomCountQuery($criteria)
	{
		$sql = "select count(1) as counter from `eventos`";

		// the criteria can be used or you can write your own custom logic.
		// be sure to escape any user input with $criteria->Escape()
		$sql .= $criteria->GetWhere();

		return $sql;
	}
}

?>