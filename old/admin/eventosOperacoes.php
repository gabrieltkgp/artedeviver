<?php
include_once("../classes/tools.php");
include_once("../classes/constants.php");
include_once("../classes/eventos.php");

class EventosOperacoes{
	// BEGIN INSERT
	private function insertNewEvento(&$pnId, $evento_nome, $evento_local, $evento_endereco, $evento_observacao, $id_cidade, $evento_data, $evento_hora, $evento_privado, $evento_link, $evento_map){

		$sSql = "INSERT INTO " .
			"eventos " .
			"(nome, local, endereco, observacao, id_cidade, data, privado, link, map) " .
			"VALUES " .
			"(?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$datahora = $evento_data . " " . $evento_hora . ":00";

		try{
			$oTools = new Tools();
			$oConn = $oTools->getConn();
			$oStmt = $oConn->prepare($sSql);
			$oStmt->bind_param('ssssisiss', $evento_nome, $evento_local, $evento_endereco, $evento_observacao, $id_cidade, $datahora, $evento_privado, $evento_link, $evento_map);

			$bSuccess = $oStmt->execute();

			if ($bSuccess) {
				$pnId = $oConn->insert_id;
			}
		} catch(Exception $e) {
			$bSuccess = false;

			echo 'The error is: '. $e->getMessage();
		}

		$oStmt->free_result();

		$oStmt->close();

		$oConn->close();
		
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

	public function executeInsert($evento_nome, $evento_local, $evento_endereco, $evento_observacao, $id_cidade, $evento_data, $evento_hora, $evento_privado, $evento_link, $evento_map){

		if (!$this->testIfParametersAreValid($evento_nome, $evento_local, $id_cidade, $evento_data, $evento_hora)){
			echo "missing information.";
			return false;
		}

		$nId = 0;

		$bSuccess = $this->insertNewEvento($nId, $evento_nome, $evento_local, $evento_endereco, $evento_observacao, $id_cidade, $evento_data, $evento_hora, $evento_privado, $evento_link, $evento_map);

		return $bSuccess;
	}
	// END INSERT

	// BEGIN QUERY
	private function getSelectTextEvento($pnEventoId){
    	$select = "SELECT " .
        	"eve.id, eve.nome, eve.local, eve.endereco, eve.observacao, eve.data, eve.id_cidade, eve.privado, eve.link, eve.map, cid.id_estado " .
        	"FROM " .
        	"eventos eve " .
        	"JOIN cidades cid ON cid.id = eve.id_cidade " .
        	"WHERE " .
        	"eve.data >= now()  - INTERVAL 1 DAY";

    	$select = $select . " and eve.id_cidade = ?";

    	if(!empty($pnEventoId)){
        	$select = $select .
        		" and eve.id = ?";
    	}

    	$select = $select . " ORDER BY eve.data";

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
      $paEventosArray[$i]->setMap($row['map']);
      $paEventosArray[$i]->setData($row['data']);
      $paEventosArray[$i]->setPrivado($row['privado']);
      $paEventosArray[$i]->setIdCidade($row['id_cidade']);
      $paEventosArray[$i]->setIdEstado($row['id_estado']);
    }

	public function queryEventos($pnEventoId, $pnIdCidade){

		try{
			$oTools = new Tools();
			$oConn = $oTools->getConn();

			$sSql = $this->getSelectTextEvento($pnEventoId, $pnIdCidade);
			$oStmt = $oConn->prepare($sSql);
			$eventosArray = array();

			if(!empty($pnEventoId)){
	    		$oStmt->bind_param('ii', $pnIdCidade, $pnEventoId);
	    	} else
	    	{
	    		$oStmt->bind_param('i', $pnIdCidade);	
	    	}

			$oStmt->execute();

			$oStmt->store_result();

	        $oStmt->bind_result($id, $nome, $local, $endereco, $observacao, $data, $id_cidade, $privado, $link, $map, $id_estado);

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
					//$eventosArray[$i]->setNomeCidade($nome_cidade);
					$eventosArray[$i]->setIdEstado($id_estado);
					//$eventosArray[$i]->setNomeEstado($nome_estado);
					$eventosArray[$i]->setMap($map);

					$i = $i + 1;
				}  
			}

		}catch(Exception $e){
			echo 'The error is: '. $e->getMessage();

		}

			$oStmt->free_result();

			$oStmt->close();

			$oConn->close();

		return $eventosArray;
    }

  //   public function executeQuery($pnEventoId){

  //    	$oResult = $this->queryEventos($pnEventoId);

  //    	$eventosArray = array();

		// if($oResult->num_rows > 0) {
		// 	$i = 1;

		// 	while($row = $oResult->fetch_assoc()){
		// 	  $this->setEventosArray($eventosArray, $i, $row);
		// 	  $i = $i + 1;
		// 	}
		// }
  //     return $eventosArray;
  //   } 
	// END QUERY

	// BEGIN UPDATE
	private function updateEvento($evento_id, $evento_nome, $evento_local, $evento_endereco, $evento_observacao, $id_cidade, $evento_data, $evento_hora, $evento_privado, $evento_link, $evento_map){
 
		$sSqlUpdateEvento = "UPDATE " .
			"eventos " .
			"SET " .
			"nome = ?, ".
			"local = ?, ". 
			"endereco = ?, ".
			"observacao = ?, ". 
			"data = ?, ".
			"id_cidade = ?, ". 
			"privado = ?, ". 
			"link = ?, ".
			"map = ? ".
			"WHERE " .
			"id = ?";

		$datahora = $evento_data . " " . $evento_hora . ":00";

		
		try{
			$oTools = new Tools();
			$oConn = $oTools->getConn();

			$oStmt = $oConn->prepare($sSqlUpdateEvento);
			$oStmt->bind_param('sssssiissi',  $evento_nome, $evento_local, $evento_endereco, $evento_observacao, $datahora, $id_cidade, $evento_privado, $evento_link, $evento_map, $evento_id);

			$bSucess = $oStmt->execute();

		}catch(Exception $e){
	    	$bSucess = false;
	    	echo 'The error is: '. $e->getMessage();
	    }
	    
		$oStmt->free_result();

		$oStmt->close();

		$oConn->close();
		
	    return $bSucess;
	}

	public function executeUpdate($evento_id, $evento_nome, $evento_local, $evento_endereco, $evento_observacao, $id_cidade, $evento_data, $evento_hora, $evento_privado, $evento_link, $evento_map){
		
		if (empty($evento_id)){
			return false;
		}

		return $this->updateEvento($evento_id, $evento_nome, $evento_local, $evento_endereco, $evento_observacao, $id_cidade, $evento_data, $evento_hora, $evento_privado, $evento_link, $evento_map);
	}
	// END UPDATE

	//BEGIN DELETE
	private function deleteEvento($evento_id){

		$sSqlDeleteEvento = "DELETE FROM " .
			"eventos " .
			"WHERE " .
			"id = ?";

		try{
			$oTools = new Tools();
			$oConn = $oTools->getConn();

			$oStmt = $oConn->prepare($sSqlDeleteEvento);
			$oStmt->bind_param('i', $evento_id);

		    $bSucess = $oStmt->execute();

	    }catch(Exception $e){
	    	$bSucess = false;
	    	echo 'The error is: '. $e->getMessage();
	    }
	    
		$oStmt->free_result();

		$oStmt->close();

		$oConn->close();
		
	    return $bSucess;
	}

	public function executeDelete($evento_id){
		
		if (empty($evento_id)){
			return false;
		}

		return $this->deleteEvento($evento_id);
	}
	//END DELETE

}

?>