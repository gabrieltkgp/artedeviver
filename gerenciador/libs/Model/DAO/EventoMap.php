<?php
/** @package    U2107658441::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/IDaoMap.php");
require_once("verysimple/Phreeze/IDaoMap2.php");

/**
 * EventoMap is a static class with functions used to get FieldMap and KeyMap information that
 * is used by Phreeze to map the EventoDAO to the eventos datastore.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * You can override the default fetching strategies for KeyMaps in _config.php.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package U2107658441::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class EventoMap implements IDaoMap, IDaoMap2
{

	private static $KM;
	private static $FM;
	
	/**
	 * {@inheritdoc}
	 */
	public static function AddMap($property,FieldMap $map)
	{
		self::GetFieldMaps();
		self::$FM[$property] = $map;
	}
	
	/**
	 * {@inheritdoc}
	 */
	public static function SetFetchingStrategy($property,$loadType)
	{
		self::GetKeyMaps();
		self::$KM[$property]->LoadType = $loadType;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function GetFieldMaps()
	{
		if (self::$FM == null)
		{
			self::$FM = Array();
			self::$FM["Id"] = new FieldMap("Id","eventos","id",true,FM_TYPE_INT,11,null,true);
			self::$FM["Nome"] = new FieldMap("Nome","eventos","nome",false,FM_TYPE_VARCHAR,255,null,false);
			self::$FM["Local"] = new FieldMap("Local","eventos","local",false,FM_TYPE_VARCHAR,255,null,false);
			self::$FM["Endereco"] = new FieldMap("Endereco","eventos","endereco",false,FM_TYPE_VARCHAR,255,null,false);
			self::$FM["Observacao"] = new FieldMap("Observacao","eventos","observacao",false,FM_TYPE_VARCHAR,255,null,false);
			self::$FM["Data"] = new FieldMap("Data","eventos","data",false,FM_TYPE_TIMESTAMP,null,"CURRENT_TIMESTAMP",false);
			self::$FM["IdCidade"] = new FieldMap("IdCidade","eventos","id_cidade",false,FM_TYPE_INT,11,null,false);
			self::$FM["Privado"] = new FieldMap("Privado","eventos","privado",false,FM_TYPE_TINYINT,1,null,false);
			self::$FM["Link"] = new FieldMap("Link","eventos","link",false,FM_TYPE_VARCHAR,255,null,false);
			self::$FM["Map"] = new FieldMap("Map","eventos","map",false,FM_TYPE_VARCHAR,255,null,false);
			self::$FM["IdTipoEvento"] = new FieldMap("IdTipoEvento","eventos","id_tipo_evento",false,FM_TYPE_INT,11,null,false);
		}
		return self::$FM;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function GetKeyMaps()
	{
		if (self::$KM == null)
		{
			self::$KM = Array();
		}
		return self::$KM;
	}

}

?>