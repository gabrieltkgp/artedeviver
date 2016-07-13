<?php
include_once("../classes/tools.php");
include_once("../classes/constants.php");

class EventosOperacoes{

	private $oTools;
	private $oConn;

	function __construct(){
		$this->oTools = new Tools();
		$this->oConn = $this->oTools->getConn();
	}

	// BEGIN INSERT
	private function insertNewEvento(&$pnId, $psNome, $psLocal, $psEndereco, $psObservacao, $pnData, $pnIdCidade, $pnPrivado, $psLink){
		$sSql = "INSERT INTO " .
			"eventos " .
			"(nome, local, endereco, observacao, data, id_cidade, privado, link) " .
			"VALUES " .
			"(?, ?, ?, ?, ?, ?, ?, ?)";

		$oStmt = $this->oConn->prepare($sSql);
		$oStmt->bind_param('ssssiiis', $psNome, $psLocal, $psEndereco, $psObservacao, $pnData, $pnIdCidade, $pnPrivado, $psLink);

		$bSuccess = $oStmt->execute();

		if ($bSuccess) {
			$pnId = $this->oConn->insert_id;
		}

		return $bSuccess;
	}

	private function testIfParametersAreValid($psNome, $psLocal, $psEndereco, $psObservacao, $pnData, $pnIdCidade, $pnPrivado, $psLink){
		
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

	public function executeInsert($psNome, $psLocal, $psEndereco, $psObservacao, $pnData, $pnIdCidade, $pnPrivado, $psLink){

		if (!$this->testIfParametersAreValid($psNome, $psLocal, $psEndereco, $psObservacao, $pnData, $pnIdCidade, $pnPrivado, $psLink)){
			echo "missing information.";
			return false;
		}

		//$this->oConn->autocommit(FALSE);

		try{
			$nId = 0;

			$bSuccess = $this->insertNewEvento($nId, $psNome, $psLocal, $psEndereco, $psObservacao, $pnData, $pnIdCidade, $pnPrivado, $psLink);

			if ($bSuccess){
				//$this->oConn->commit();
				echo "novo evento inserido com sucesso.";
			}
			else{
				//$this->oConn->rollback();	
				echo "something wrong happened.";
			}
		} catch(Exception  $e){
			//$this->oConn->rollback();

			echo 'The error is: '. $e->getMessage();
		}

		//$this->oConn->autocommit(TRUE);
		
		return $bSuccess;
	}
	// END INSERT

	// BEGIN QUERY
	private function getSelectTextEvento($pnId){
    	$select = "SELECT " .
        	"eve.id, eve.nome, eve.local, eve.endereco, eve.observacao, eve.data, eve.id_cidade, eve.privado, eve.link " .
        	"FROM " .
        	"eventos eve" .
        	"JOIN cidades cid on cid.id = eve.id_cidade ";

    	if(!empty($pnTaskId)){
        	$select = $select .
        		"WHERE " .
        		"eve.id = ? ";
    	}

    	return $select;
    }

    private function setTasksArray(&$paTasksArray, $i, $row){
      $paTasksArray[$i] = new Tasks();

      $paTasksArray[$i]->setId($row['task_id']);
      $paTasksArray[$i]->setName($row['task_name']);      
      $paTasksArray[$i]->setDescription($row['task_description']);
      $paTasksArray[$i]->setTypeId($row['type_id']);
      $paTasksArray[$i]->setTypeName($row['type_name']);
      $paTasksArray[$i]->setActive($row['task_active']);
    }

	private function queryTasks($pnTaskId){

		$sSql = $this->getSelectTextTask($pnTaskId);
		$oStmt = $this->oConn->prepare($sSql);

		if(!empty($pnTaskId)){
    		$oStmt->bind_param('i', $pnTaskId);
    	}
		
		$oStmt->execute();

		return $oStmt->get_result(); 
    }

    public function executeQuery($pnTaskId){

     	$oResult = $this->queryTasks($pnTaskId);

     	$tasksArray = array();

		if($oResult->num_rows > 0) {
			$i = 1;

			while($row = $oResult->fetch_assoc()){
			  $this->setTasksArray($tasksArray, $i, $row);
			  $i = $i + 1;
			}
		}

      return $tasksArray;
    } 
	// END QUERY

	// BEGIN UPDATE
	private function updateTaskRegister($pnTaskId, $psTaskName, $psTaskDescription, $pnTypeId, $pnTaskActive){
		$sSqlUpdateTask = "UPDATE " .
			"wd_tasks " .
			"SET " .
			"task_name = ?, " .
			"task_description = ?, " .
			"type_id = ?, " .
			"task_active = ? ".
			"WHERE " .
			"task_id = ?";

		$stmt = $this->oConn->prepare($sSqlUpdateTask);
		$stmt->bind_param('ssiii',  $psTaskName, $psTaskDescription, $pnTypeId, $pnTaskActive, $pnTaskId);

	    return $stmt->execute();
	}

	public function executeUpdate($pnTaskId, $psTaskName, $psTaskDescription, $pnTypeId, $pnTaskActive){
		
		if (empty($pnTaskId)){
			return false;
		}

		return $this->updateTaskRegister($pnTaskId, $psTaskName, $psTaskDescription, $pnTypeId, $pnTaskActive);
	}
	// END UPDATE
}

?>