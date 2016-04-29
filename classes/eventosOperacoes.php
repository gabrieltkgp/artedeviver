<?php
include_once("p2-tools.php");
include_once("p2-constants.php");
include_once("p2-tasks.php");

class EventosOperacoes{

	private $oTools;
	private $oConn;

	function __construct(){
		$this->oTools = new Tools();
		$this->oConn = $this->oTools->getConn();
	}

	// BEGIN INSERT
	private function insertNewTask(&$pnTaskID, $psTaskName, $psTaskDescription, $pnTypeId){
		$sSql = "INSERT INTO " .
			"wd_tasks " .
			"(task_name, task_description, type_id, task_active) " .
			"VALUES " .
			"(?, ?, ?, 1)";

		$oStmt = $this->oConn->prepare($sSql);
		$oStmt->bind_param('ssi', $psTaskName, $psTaskDescription, $pnTypeId);

		$bSuccess = $oStmt->execute();

		if ($bSuccess) {
			$pnTaskID = $this->oConn->insert_id;
		}

		return $bSuccess;
	}

	private function insertFeatureTask($pnFeatureId, $pnTaskId){
		$sSql = "INSERT INTO " .
			"wd_features_tasks " .
			"(feat_id, task_id) " .
			"VALUES " .
			"(?, ?)";

		$oStmt = $this->oConn->prepare($sSql);
		$oStmt->bind_param('ii', $pnFeatureId, $pnTaskId);

		return $oStmt->execute();
	}

	private function queryAllProjectsContainsThisFeature($pnFeatureId){
		$sSql = "SELECT " .
			"distinct proj_id " . 
			"FROM " . 
			"wd_uploads ".
			"WHERE " .
			"feat_id = ? " .
			"ORDER BY " .
			"proj_id";

		$oStmt = $this->oConn->prepare($sSql);
		$oStmt->bind_param('i', $pnFeatureId);

		return $oStmt->execute();
	}

	private function insertUpload($pnFeatureId, $pnTaskId, $pnTaskDone, $pnTaskApproved){
		
		$oResult = $this->queryAllProjectsContainsThisFeature($pnFeatureId);

		if($oResult->num_rows <= 0) {
			return True;
		}

		$sSql = "INSERT INTO " .
		"wd_uploads " .
		"(proj_id, feat_id, task_id, uplo_done, uplo_approved) ".
		"VALUES " .
		"(?, ?, ?, ?, ?)";

		$bSuccess = true;

		while($row = $oResult->fetch_assoc()){
			if (!$bSuccess){
				break;
			}

			$nProjectId = $row['proj_id'];

			$oStmt = $this->oConn->prepare($sSql);
			$oStmt->bind_param('iiiii', $nProjectId, $pnFeatureId, $pnTaskId, $pnTaskDone, $pnTaskApproved);

			$bSuccess = $oStmt->execute();
		}

		return $bSuccess;
	}

	private function testIfParametersAreValid($pnFeatureId, $psTaskName, $psTaskDescription, $pnTypeId){
		
		if (empty($pnFeatureId)){
			return false;
		}

		if ($pnFeatureId <= 0){
			return false;
		}

		if (empty($psTaskName)){
			return false;
		}

		if (empty($psTaskDescription)){
			return false;
		}

		if (empty($pnTypeId)){
			return false;
		}

		if (!(($pnTypeId = FILE) or ($pnTypeId = TEXT))) {
			return false;
		}

		return true;
	}

	public function executeInsert($pnFeatureId, $psTaskName, $psTaskDescription, $pnTypeId){

		if (!$this->testIfParametersAreValid($pnFeatureId, $psTaskName, $psTaskDescription, $pnTypeId)){
			echo "missing information.";
			return false;
		}

		$this->oConn->autocommit(FALSE);

		try{
			$nTaskId = 0;

			$bSuccess = $this->insertNewTask($nTaskId, $psTaskName, $psTaskDescription, $pnTypeId);

			if ($bSuccess){
				$bSuccess = $this->insertFeatureTask($pnFeatureId, $nTaskId);
			}

			if ($bSuccess){
				$bSuccess = $this->insertUpload($pnFeatureId, $nTaskId, 0, 0);
			}	

			if ($bSuccess){
				$this->oConn->commit();
				echo "new task inserted.";
			}
			else{
				$this->oConn->rollback();	
				echo "something wrong happened.";
			}
		} catch(Exception  $e){
			$this->oConn->rollback();

			echo 'The error is: '. $e->getMessage();
		}

		$this->oConn->autocommit(TRUE);
		
		return $bSuccess;
	}
	// END INSERT

	// BEGIN QUERY
	private function getSelectTextTask($pnTaskId){
    	$select = "SELECT " .
        	"tk.task_id, tk.task_name, tk.task_description, tk.type_id, tk.task_active, tp.type_name " .
        	"FROM " .
        	"wd_tasks tk " .
        	"JOIN wd_types tp on tp.type_id = tk.type_id ";

    	if(!empty($pnTaskId)){
        	$select = $select .
        		"WHERE " .
        		"tk.task_id = ? ";
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