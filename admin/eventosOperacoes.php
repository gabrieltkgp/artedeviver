<?php
include_once("../classes/tools.php");
include_once("../classes/constants.php");
include_once("../classes/eventos.php");

class EventosOperacoes{

	private $oTools;
	private $oConn;

	function __construct(){
		$this->oTools = new Tools();
		$this->oConn = $this->oTools->getConn();
	}

	// BEGIN INSERT
	private function insertNewEvento(&$pnId, $evento_nome, $evento_local, $evento_endereco, $evento_observacao, $id_cidade, $evento_data, $evento_hora, $evento_privado, $evento_link){
		$sSql = "INSERT INTO " .
			"eventos " .
			"(nome, local, endereco, observacao, id_cidade, data, privado, link) " .
			"VALUES " .
			"(?, ?, ?, ?, ?, ?, ?, ?)";

		$datahora = $evento_data . " " . $evento_hora . ":00";

		$oStmt = $this->oConn->prepare($sSql);
		$oStmt->bind_param('ssssisis', $evento_nome, $evento_local, $evento_endereco, $evento_observacao, $id_cidade, $datahora, $evento_privado, $evento_link);

		$bSuccess = $oStmt->execute();

		if ($bSuccess) {
			$pnId = $this->oConn->insert_id;
		}

		return $bSuccess;
	}

	private function testIfParametersAreValid($evento_nome, $evento_local, $id_cidade, $evento_data, $evento_hora){
		
		// if (empty($pnFeatureId)){
		// 	return false;
		// }

		// if ($pnFeatureId <= 0){
		// 	return false;
		// }

		// if (empty($psTaskName)){
		// 	return false;
		// }

		// if (empty($psTaskDescription)){
		// 	return false;
		// }

		// if (empty($pnTypeId)){
		// 	return false;
		// }

		// if (!(($pnTypeId = FILE) or ($pnTypeId = TEXT))) {
		// 	return false;
		// }

		return true;
	}

	public function executeInsert($evento_nome, $evento_local, $evento_endereco, $evento_observacao, $id_cidade, $evento_data, $evento_hora, $evento_privado, $evento_link){

		if (!$this->testIfParametersAreValid($evento_nome, $evento_local, $id_cidade, $evento_data, $evento_hora)){
			echo "missing information.";
			return false;
		}

		//$this->oConn->autocommit(FALSE);

		try{
			$nId = 0;

			$bSuccess = $this->insertNewEvento($nId, $evento_nome, $evento_local, $evento_endereco, $evento_observacao, $id_cidade, $evento_data, $evento_hora, $evento_privado, $evento_link);

		} catch(Exception  $e){
			//$this->oConn->rollback();

			echo 'The error is: '. $e->getMessage();
		}

		//$this->oConn->autocommit(TRUE);
		
		return $bSuccess;
	}
	// END INSERT

	// BEGIN QUERY
	private function getSelectTextEvento($pnEventoId){
    	$select = "SELECT " .
        	"eve.id, eve.nome, eve.local, eve.endereco, eve.observacao, eve.data, eve.id_cidade, eve.privado, eve.link, cid.id_estado " .
        	"FROM " .
        	"eventos eve " .
        	"JOIN cidades cid ON cid.id = eve.id_cidade " .
        	"WHERE " .
        	"eve.data >= now() ";

    	if(!empty($pnEventoId)){
        	$select = $select .
        		" and eve.id = ?";
    	}

    	return $select;
    }

    private function setEventosArray(&$paEventosArray, $i, $row){
      $paEventosArray[$i] = new Eventos();

      $paEventosArray[$i]->setId($row['id']);
      $paEventosArray[$i]->setNome($row['nome']);      
      $paEventosArray[$i]->setLocal($row['local']);
      $paEventosArray[$i]->setEndereco($row['endereco']);
      $paEventosArray[$i]->setObservacao($row['observacao']);
      $paEventosArray[$i]->setLink($row['link']);
      $paEventosArray[$i]->setData($row['data']);
      $paEventosArray[$i]->setPrivado($row['privado']);
      $paEventosArray[$i]->setIdCidade($row['id_cidade']);
      $paEventosArray[$i]->setIdEstado($row['id_estado']);
    }

	private function queryEventos($pnEventoId){

		$sSql = $this->getSelectTextEvento($pnEventoId);
		$oStmt = $this->oConn->prepare($sSql);

		if(!empty($pnEventoId)){
    		$oStmt->bind_param('i', $pnEventoId);
    	}

    	//TEM QUE AJUSTAR AQUI PORQUE EU SÓ COLEI OS CODIGOS DE OUTRA CLASSE.
		
		$oStmt->store_result();

        $oStmt->bind_result($id, $nome, $local, $endereco, $observacao, $link, $data, $privado, $id_cidade, $nome_cidade, $id_estado, $nome_estado, 
          $map);

      if ($oStmt->num_rows > 0){
        $i = 1;
        while ($oStmt->fetch()) {
          $eventosArray[$i] = new Eventos();

          $eventosArray[$i]->setId($id);
          $eventosArray[$i]->setNome($nome);   
          $eventosArray[$i]->setLocal($local);   
          $eventosArray[$i]->setEndereco($endereco);
          $eventosArray[$i]->setObservacao($observacao);
          $eventosArray[$i]->setLink($link);
          $eventosArray[$i]->setData($data);
          $eventosArray[$i]->setPrivado($privado);
          $eventosArray[$i]->setIdCidade($id_cidade);
          $eventosArray[$i]->setNomeCidade($nome_cidade);
          $eventosArray[$i]->setIdEstado($id_estado);
          $eventosArray[$i]->setNomeEstado($nome_estado);
          $eventosArray[$i]->setMap($map);

          $i = $i + 1;
        }  
      }

      $oStmt->free_result();

      $oStmt->close();

      $oConn->close();

      return $eventosArray;
    }

    public function executeQuery($pnEventoId){

     	$oResult = $this->queryEventos($pnEventoId);

     	$eventosArray = array();

		if($oResult->num_rows > 0) {
			$i = 1;

			while($row = $oResult->fetch_assoc()){
			  $this->setEventosArray($eventosArray, $i, $row);
			  $i = $i + 1;
			}
		}

      return $eventosArray;
    } 
	// END QUERY

	// BEGIN UPDATE
	private function updateEvento($evento_id, $evento_nome, $evento_local, $evento_endereco, $evento_observacao, $id_cidade, $evento_data, $evento_hora, $evento_privado, $evento_link){

		$sSqlUpdateTask = "UPDATE " .
			"eventos " .
			"SET " .
			"nome = ?, ".
			"local = ?, ". 
			"endereco = ?, ".
			"observacao = ?, ". 
			"data = ?, ".
			"id_cidade = ?, ". 
			"privado = ?, ". 
			"link = ? ".
			"WHERE " .
			"id = ?";

		$datahora = $evento_data . " " . $evento_hora . ":00";

		$stmt = $this->oConn->prepare($sSqlUpdateTask);
		$stmt->bind_param('sssssiisi',  $evento_nome, $evento_local, $evento_endereco, $evento_observacao, $datahora, $id_cidade, $evento_privado, $evento_link, $evento_id);

	    return $stmt->execute();
	}

	public function executeUpdate($evento_id, $evento_nome, $evento_local, $evento_endereco, $evento_observacao, $id_cidade, $evento_data, $evento_hora, $evento_privado, $evento_link){
		
		if (empty($evento_id)){
			return false;
		}

		return $this->updateEvento($evento_id, $evento_nome, $evento_local, $evento_endereco, $evento_observacao, $id_cidade, $evento_data, $evento_hora, $evento_privado, $evento_link);
	}
	// END UPDATE
}

?>