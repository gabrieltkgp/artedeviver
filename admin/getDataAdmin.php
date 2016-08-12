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
		$return .= '	<input style="width:600px;" name="evento_id' . $evento->getId() . '" id="evento_id' . $evento->getId() . '" value="' . $evento->getId() . '" type=text disabled/> <br />';
		$return .= '	<div style="width:100px;float:left;"> Nome: </div>';
		$return .= '	<input style="width:600px;" name="evento_nome_' . $evento->getId() . '" id="evento_nome_' . $evento->getId() . '" value="' . $evento->getNome() . '" type=text/> <br />';
		$return .= '	<div style="width:100px;float:left;"> Local: </div>';
		$return .= '	<input style="width:600px;" name="evento_local_' . $evento->getId() . '" id="evento_local_' . $evento->getId() . '" value="' . $evento->getLocal() . '" type=text size=80/> <br />';
		$return .= '	<div style="width:100px;float:left;"> Endereco: </div>';
		$return .= '	<input style="width:600px;" name="evento_endereco_' . $evento->getId() . '" id="evento_endereco_' . $evento->getId() . '" value="' . $evento->getEndereco() . '" type=text size=80/> <br />';
		$return .= '	<div style="width:100px;float:left;"> Observacao: </div>';
		$return .= '	<input style="width:600px;" name="evento_observacao_' . $evento->getId() . '" id="evento_observacao_' . $evento->getId() . '" value="' . $evento->getObservacao() . '" type=text size=80/> <br />';

		include_once("../classes/components.php");
        $oType = new Components();
        $return .= $oType->createEstadosDropDown();

        $oType = new Components();
        $return .= $oType->createDropDownEmpty("selection_cidades", "idCidade");

		$return .= '	<br>';

		$return .= '	<div style="width:100px;float:left;"> Privado: </div>';
		$return .= '	<input type="radio" name="evento_privado' . $evento->getId() . '" value="1" '. ($evento->getPrivado() == 1 ? "checked" : "") .'> Sim ';
        $return .= '	<input type="radio" name="evento_privado' . $evento->getId() . '" value="0" '. ($evento->getPrivado() == 0 ? "checked" : "") .'> Não';
		$return .= '	<br>';
		$return .= '	<input name="evento_update_' . $evento->getId() . '" id="evento_update_' . $evento->getId() . '" value="update" onclick="uploadTask(' . $evento->getId() . ')" type="button" />';
		$return .= '	<input name="evento_delete_' . $evento->getId() . '" id="evento_delete_' . $evento->getId() . '" value="delete" onclick="deleteTask(' . $evento->getId() . ')" type="button" />';
		$return .= '	<br><br>';
		$return .= '</form>';

		echo $return;
	}

	
}


?>