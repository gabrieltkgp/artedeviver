<?php
include_once("classes/eventosQuery2.php");

$eventosQuery = new EventosQuery2();

$eventosArray = $eventosQuery->ConsultarEventosCadastrados($_POST['email'], $_POST['idCidade']);

if (empty($eventosArray)) {
	exit;
}

foreach($eventosArray as $evento){  
	echo "<div  class='evento'>";
	echo   "<div class='campo'>Evento: ". $evento->getNome() ."</div>";
	echo   "<div class='campo'>Local: ". $evento->getLocal() ."</div>";
	echo   "<div class='campo'>Endereço: ". $evento->getEndereco() ."</div>";
	echo   "<div class='campo'>Observação: ". $evento->getObservacao() ."</div>";
	echo   "<div class='campo'>Data: ". $evento->getData() ."</div>";
	echo   "<div class='campo'>Cidade: ". $evento->getNomeCidade() ."</div>";
	echo   "<div class='campo'>Estado: ". $evento->getNomeEstado() ."</div>";
	echo   "<br>";     
	echo "</div>";
}
?>