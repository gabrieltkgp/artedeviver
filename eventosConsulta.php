<?php
include_once("classes/eventosQuery2.php");

$eventosQuery = new EventosQuery2();

$eventosArray = $eventosQuery->ConsultarEventosCadastrados($_POST['email'], $_POST['idCidade']);

if (empty($eventosArray)) {
	exit;
}

$i = 1;

foreach($eventosArray as $evento){
	if (($i % 2) == 0){
		$cor = "#EEE9E9";
	}  
	else{
		$cor = "#F0FFFF";
	}
	echo "<div class='evento' style='background-color:$cor'>";
	echo   "<div class='campo'>Evento: ". $evento->getNome() ."</div>";
	echo   "<div class='campo'>Local: ". $evento->getLocal() ."</div>";
	echo   "<div class='campo'>Endereço: ". $evento->getEndereco() ."</div>";
	echo   "<div class='campo'>Observação: ". $evento->getObservacao() ."</div>";
	echo   "<div class='campo'>Data: ". $evento->getData() ."</div>";
	// echo   "<div class='campo'>Cidade: ". $evento->getNomeCidade() ."</div>";
	// echo   "<div class='campo'>Estado: ". $evento->getNomeEstado() ."</div>";
	// echo   "<br>";     
	echo "</div>";

	$i++;
}
?>