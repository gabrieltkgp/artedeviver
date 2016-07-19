<?php
include_once("eventosOperacoes.php");
include_once("../classes/components.php");

createFormEventos();

function createFormEventos(){ 
	$id = $_GET['id'];
	$oEventoOperacoes = new EventosOperacoes();
	$aEventosArray = $oEventoOperacoes->executeQuery($id);

	if (empty($aEventosArray)) {
		echo "Id not found: " . $id;
		exit;
	}

	$return = "";

	foreach($aEventosArray as $evento){

		$return .= '<form name="form_' . $evento->getId() . '" id="form_' . $evento->getId() . '" action="" method="post">';
		$return .= '	<div style="width:100px;float:left;"> Id: </div> ';
		$return .= '	<input style="width:600px;" name="task_id_' . $evento->getId() . '" id="task_id_' . $evento->getId() . '" value="' . $evento->getId() . '" type=text disabled/> <br />';
		$return .= '	<div style="width:100px;float:left;"> Name: </div>';
		$return .= '	<input style="width:600px;" name="task_name_' . $evento->getId() . '" id="task_name_' . $evento->getId() . '" value="' . $evento->getNome() . '" type=text/> <br />';
		$return .= '	<div style="width:100px;float:left;"> Description: </div>';
		$return .= '	<input style="width:600px;" name="task_description_' . $evento->getId() . '" id="task_description_' . $evento->getId() . '" value="' . $evento->getObservacao() . '" type=text size=80/> <br />';

		$return .= '	<br>';
		$return .= '	<div style="width:100px;float:left;"> Privado: </div>';
		$return .= '	<input type="radio" name="task_active_' . $evento->getId() . '" value="1" '. ($evento->getPrivado() == 1 ? "checked" : "") .'> Sim ';
        $return .= '	<input type="radio" name="task_active_' . $evento->getId() . '" value="0" '. ($evento->getPrivado() == 0 ? "checked" : "") .'> Não';
		$return .= '	<br>';
		$return .= '	<input name="task_button_update_' . $evento->getId() . '" id="task_button_update_' . $evento->getId() . '" value="update" onclick="uploadTask(' . $evento->getId() . ')" type="button" />';
		$return .= '	<br><br>';
		$return .= '</form>';
	}

	echo $return;
}


?>