<?php
/** @package    U2107658441::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Criteria.php");

/**
 * EventoCriteria allows custom querying for the Evento object.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the ModelCriteria class which is extended from this class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @inheritdocs
 * @package U2107658441::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class EventoCriteriaDAO extends Criteria
{

	public $Id_Equals;
	public $Id_NotEquals;
	public $Id_IsLike;
	public $Id_IsNotLike;
	public $Id_BeginsWith;
	public $Id_EndsWith;
	public $Id_GreaterThan;
	public $Id_GreaterThanOrEqual;
	public $Id_LessThan;
	public $Id_LessThanOrEqual;
	public $Id_In;
	public $Id_IsNotEmpty;
	public $Id_IsEmpty;
	public $Id_BitwiseOr;
	public $Id_BitwiseAnd;
	public $Nome_Equals;
	public $Nome_NotEquals;
	public $Nome_IsLike;
	public $Nome_IsNotLike;
	public $Nome_BeginsWith;
	public $Nome_EndsWith;
	public $Nome_GreaterThan;
	public $Nome_GreaterThanOrEqual;
	public $Nome_LessThan;
	public $Nome_LessThanOrEqual;
	public $Nome_In;
	public $Nome_IsNotEmpty;
	public $Nome_IsEmpty;
	public $Nome_BitwiseOr;
	public $Nome_BitwiseAnd;
	public $Local_Equals;
	public $Local_NotEquals;
	public $Local_IsLike;
	public $Local_IsNotLike;
	public $Local_BeginsWith;
	public $Local_EndsWith;
	public $Local_GreaterThan;
	public $Local_GreaterThanOrEqual;
	public $Local_LessThan;
	public $Local_LessThanOrEqual;
	public $Local_In;
	public $Local_IsNotEmpty;
	public $Local_IsEmpty;
	public $Local_BitwiseOr;
	public $Local_BitwiseAnd;
	public $Endereco_Equals;
	public $Endereco_NotEquals;
	public $Endereco_IsLike;
	public $Endereco_IsNotLike;
	public $Endereco_BeginsWith;
	public $Endereco_EndsWith;
	public $Endereco_GreaterThan;
	public $Endereco_GreaterThanOrEqual;
	public $Endereco_LessThan;
	public $Endereco_LessThanOrEqual;
	public $Endereco_In;
	public $Endereco_IsNotEmpty;
	public $Endereco_IsEmpty;
	public $Endereco_BitwiseOr;
	public $Endereco_BitwiseAnd;
	public $Observacao_Equals;
	public $Observacao_NotEquals;
	public $Observacao_IsLike;
	public $Observacao_IsNotLike;
	public $Observacao_BeginsWith;
	public $Observacao_EndsWith;
	public $Observacao_GreaterThan;
	public $Observacao_GreaterThanOrEqual;
	public $Observacao_LessThan;
	public $Observacao_LessThanOrEqual;
	public $Observacao_In;
	public $Observacao_IsNotEmpty;
	public $Observacao_IsEmpty;
	public $Observacao_BitwiseOr;
	public $Observacao_BitwiseAnd;
	public $Data_Equals;
	public $Data_NotEquals;
	public $Data_IsLike;
	public $Data_IsNotLike;
	public $Data_BeginsWith;
	public $Data_EndsWith;
	public $Data_GreaterThan;
	public $Data_GreaterThanOrEqual;
	public $Data_LessThan;
	public $Data_LessThanOrEqual;
	public $Data_In;
	public $Data_IsNotEmpty;
	public $Data_IsEmpty;
	public $Data_BitwiseOr;
	public $Data_BitwiseAnd;
	public $IdCidade_Equals;
	public $IdCidade_NotEquals;
	public $IdCidade_IsLike;
	public $IdCidade_IsNotLike;
	public $IdCidade_BeginsWith;
	public $IdCidade_EndsWith;
	public $IdCidade_GreaterThan;
	public $IdCidade_GreaterThanOrEqual;
	public $IdCidade_LessThan;
	public $IdCidade_LessThanOrEqual;
	public $IdCidade_In;
	public $IdCidade_IsNotEmpty;
	public $IdCidade_IsEmpty;
	public $IdCidade_BitwiseOr;
	public $IdCidade_BitwiseAnd;
	public $Privado_Equals;
	public $Privado_NotEquals;
	public $Privado_IsLike;
	public $Privado_IsNotLike;
	public $Privado_BeginsWith;
	public $Privado_EndsWith;
	public $Privado_GreaterThan;
	public $Privado_GreaterThanOrEqual;
	public $Privado_LessThan;
	public $Privado_LessThanOrEqual;
	public $Privado_In;
	public $Privado_IsNotEmpty;
	public $Privado_IsEmpty;
	public $Privado_BitwiseOr;
	public $Privado_BitwiseAnd;
	public $Link_Equals;
	public $Link_NotEquals;
	public $Link_IsLike;
	public $Link_IsNotLike;
	public $Link_BeginsWith;
	public $Link_EndsWith;
	public $Link_GreaterThan;
	public $Link_GreaterThanOrEqual;
	public $Link_LessThan;
	public $Link_LessThanOrEqual;
	public $Link_In;
	public $Link_IsNotEmpty;
	public $Link_IsEmpty;
	public $Link_BitwiseOr;
	public $Link_BitwiseAnd;
	public $Map_Equals;
	public $Map_NotEquals;
	public $Map_IsLike;
	public $Map_IsNotLike;
	public $Map_BeginsWith;
	public $Map_EndsWith;
	public $Map_GreaterThan;
	public $Map_GreaterThanOrEqual;
	public $Map_LessThan;
	public $Map_LessThanOrEqual;
	public $Map_In;
	public $Map_IsNotEmpty;
	public $Map_IsEmpty;
	public $Map_BitwiseOr;
	public $Map_BitwiseAnd;
	public $IdTipoEvento_Equals;
	public $IdTipoEvento_NotEquals;
	public $IdTipoEvento_IsLike;
	public $IdTipoEvento_IsNotLike;
	public $IdTipoEvento_BeginsWith;
	public $IdTipoEvento_EndsWith;
	public $IdTipoEvento_GreaterThan;
	public $IdTipoEvento_GreaterThanOrEqual;
	public $IdTipoEvento_LessThan;
	public $IdTipoEvento_LessThanOrEqual;
	public $IdTipoEvento_In;
	public $IdTipoEvento_IsNotEmpty;
	public $IdTipoEvento_IsEmpty;
	public $IdTipoEvento_BitwiseOr;
	public $IdTipoEvento_BitwiseAnd;

}

?>