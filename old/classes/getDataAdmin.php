<?php
include_once("eventosOperacoes.php");
include_once("Componentes.php");

createFormTasks();

function createFormTasks(){ 
	$id = $_GET['id'];
	$oTaskOperation = new TaskOperations();
	$aTasksArray = $oTaskOperation->executeQuery($id);

	if (empty($aTasksArray)) {
		echo "Id not found: " . $id;
		exit;
	}

	$oType = new ScorpioComponents();

	$return = "";

	foreach($aTasksArray as $task){

		$return .= '<form name="form_' . $task->getId() . '" id="form_' . $task->getId() . '" action="" method="post">';
		$return .= '	<div style="width:100px;float:left;"> Id: </div> ';
		$return .= '	<input style="width:600px;" name="task_id_' . $task->getId() . '" id="task_id_' . $task->getId() . '" value="' . $task->getId() . '" type=text disabled/> <br />';
		$return .= '	<div style="width:100px;float:left;"> Name: </div>';
		$return .= '	<input style="width:600px;" name="task_name_' . $task->getId() . '" id="task_name_' . $task->getId() . '" value="' . $task->getName() . '" type=text/> <br />';
		$return .= '	<div style="width:100px;float:left;"> Description: </div>';
		$return .= '	<input style="width:600px;" name="task_description_' . $task->getId() . '" id="task_description_' . $task->getId() . '" value="' . $task->getDescription() . '" type=text size=80/> <br />';

	    $return .= $oType->createTypeRadioGroup($task->getId(), $task->getTypeId());

		$return .= '	<br>';
		$return .= '	<div style="width:100px;float:left;"> Active: </div>';
		$return .= '	<input type="radio" name="task_active_' . $task->getId() . '" value="1" '. ($task->getActive() == 1 ? "checked" : "") .'> Yes ';
        $return .= '	<input type="radio" name="task_active_' . $task->getId() . '" value="0" '. ($task->getActive() == 0 ? "checked" : "") .'> No';
		$return .= '	<br>';
		$return .= '	<input name="task_button_update_' . $task->getId() . '" id="task_button_update_' . $task->getId() . '" value="update" onclick="uploadTask(' . $task->getId() . ')" type="button" />';
		$return .= '	<br><br>';
		$return .= '</form>';
	}

	echo $return;
}


?>