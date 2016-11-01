<?php
include_once("eventosOperacoes.php");
include_once("../classes/components.php");

createFormEventos();

function createFormEventos(){ 
	$id = $_GET['id'];
	$idCidade = $_GET['idCidade'];
	$oEventoOperacoes = new EventosOperacoes();
	//$aEventosArray = $oEventoOperacoes->executeQuery($id);
	$aEventosArray = $oEventoOperacoes->queryEventos($id, $idCidade);

	if (empty($aEventosArray)) {
		echo "Id not found: " . $id;
		exit;
	}

	$return = "";

	foreach($aEventosArray as $evento){

		$return = '<form name="form_' . $evento->getId() . '" id="form_' . $evento->getId() . '" action="" method="post">';
		$return .= '	<div class="label"> Id: </div> ';
		$return .= '	<input class="campo" name="evnto_id_' . $evento->getId() . '" id="evento_id_' . $evento->getId() . '" value="' . $evento->getId() . '" type=text disabled/>';
		$return .= '	<div class="label"> Nome: </div>';
		$return .= '	<input class="campo" name="evento_nome_' . $evento->getId() . '" id="evento_nome_' . $evento->getId() . '" value="' . $evento->getNome() . '" type=text/>';
		$return .= '	<div class="label"> Local: </div>';
		$return .= '	<input class="campo" name="evento_local_' . $evento->getId() . '" id="evento_local_' . $evento->getId() . '" value="' . $evento->getLocal() . '" type=text size=80/>';
		$return .= '	<div class="label"> Endereco: </div>';
		$return .= '	<input class="campo" name="evento_endereco_' . $evento->getId() . '" id="evento_endereco_' . $evento->getId() . '" value="' . $evento->getEndereco() . '" type=text size=80/> ';
		$return .= '	<div class="label"> Observacao: </div>';
		$return .= '	<input class="campo" name="evento_observacao_' . $evento->getId() . '" id="evento_observacao_' . $evento->getId() . '" value="' . $evento->getObservacao() . '" type=text size=80/>';

        //$oType = new Components();
        //$return .= $oType->createEstadosDropDown($evento->getIdEstado());
		$return .= '	<div class="label"> Cidade: </div>';
        $oType = new Components();
        $return .= $oType->createCidadesDropDown($evento->getIdCidade(), true, $evento->getId());

		$return .= '	<div class="label"> Data: </div>';
        $return .= '	<input class="campo" name="evento_data_' . $evento->getId() . '" id="evento_data_' . $evento->getId() . '" type="date" value="' . $evento->getDate() . '"/>';
        $return .= '	<input class="campo" name="evento_hora_' . $evento->getId() . '" id="evento_hora_' . $evento->getId() . '" type="time" value="' . $evento->getTime() . '"/>';
		$return .= '	<div class="label"> Privado: </div>';
		$return .= '	<input type="radio" name="evento_privado_' . $evento->getId() . '" id="evento_privado_' . $evento->getId() . '" value="1" '. ($evento->getPrivado() == 1 ? "checked" : "") .'> Sim ';
        $return .= '	<input type="radio" name="evento_privado_' . $evento->getId() . '" id="evento_privado_' . $evento->getId() . '" value="0" '. ($evento->getPrivado() == 0 ? "checked" : "") .'> Não';
		$return .= '	<div class="label"> Link: </div>';
		$return .= '	<input class="campo" name="evento_link_' . $evento->getId() . '" id="evento_link_' . $evento->getId() . '" value="' . $evento->getLink() . '" type=text size=80/>';
		$return .= '	<div class="label"> Map: </div>';
		$return .= '	<input class="campo" name="evento_map_' . $evento->getId() . '" id="evento_map_' . $evento->getId() . '" value="' . $evento->getMap() . '" type=text size=80/>';
		$return .= '	<input class="btn" name="evento_update_' . $evento->getId() . '" id="evento_update_' . $evento->getId() . '" value="SALVAR ALTERAÇÕES" onclick="updateEvento(' . $evento->getId() . ')" type="button" />';
		$return .= '	<input class="btn" name="evento_delete_' . $evento->getId() . '" id="evento_delete_' . $evento->getId() . '" value="APAGAR REGISTRO" onclick="deleteEvento(' . $evento->getId() . ')" type="button" />';
		$return .= '	<br><br>';
		$return .= '</form>';
		$return .= '<hr />';

		echo $return;
	}
}


?>