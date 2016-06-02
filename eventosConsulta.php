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
	echo "<div class='campo'>";
	echo 	"<div class='nome_evento'>". $evento->getNome() ."</div>";
	echo 	"<div class='data_evento'>". $evento->getOnlyDate() ."</div>";
	echo "</div>";
	echo "<div class='campo'>";
	echo 	"<div class='hora_evento'>". $evento->getOnlyTime() ."h - </div>";
	echo 	"<div class='local_evento'> ". $evento->getLocal() ." - </div>";
	echo 	"<div class='endereco_evento'> ". $evento->getEndereco() ." </div>";
	echo "</div>";
	
	// if ($evento->getEndereco() != ''){
		
	// }
	
	// if ($evento->getObservacao() != ''){
		echo "<div class='campo'>". $evento->getObservacao() ."</div>";
	// }
	
	// $sHtmlEvento = $sHtmlEvento . "<div class='campo'>Cidade: ". $evento->getNomeCidade() ."</div>";
	// $sHtmlEvento = $sHtmlEvento . "<div class='campo'>Estado: ". $evento->getNomeEstado() ."</div>";
	// $sHtmlEvento = $sHtmlEvento . "<br>";     
	echo "</div>";

	$i++;
}
?>