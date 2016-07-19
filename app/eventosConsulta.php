<?php
include_once("../classes/eventosQuery2.php");

$eventosQuery = new EventosQuery2();

$eventosArray = $eventosQuery->ConsultarEventosCadastrados($_POST['email'], $_POST['idCidade']);

if (empty($eventosArray)) {
	exit;
}

$i = 1;

foreach($eventosArray as $evento){
	// if (($i % 2) == 0){
	// 	$cor = "#EEE9E9";
	// }  
	// else{
	// 	$cor = "#F0FFFF";
	// }

	// echo "<div id=div_$i class='evento' style='background-color:$cor'>";
	echo "<div id=div_$i class='evento'>";
	echo "<div class='resultado'>";
	echo 	"<div class='nome_evento'>". $evento->getNome() ."</div>";
	echo 	"<div class='data_evento'>". $evento->getOnlyDate() ."</div>";
	echo "</div>";
	echo "<div class='resultado'>";
	echo 	"<div class='hora_evento'>". $evento->getOnlyTime() ."h </div>";
	echo 	"<div class='local_evento'> &nbsp;-&nbsp;". $evento->getLocal() ." </div>";
	
	if ($evento->getEndereco() != ''){
		echo 	"<div class='endereco_evento'> &nbsp;-&nbsp;". $evento->getEndereco() ." </div>";	
	}

	echo "</div>";
	
	if ($evento->getObservacao() != ''){
		echo "<div class='resultado'>";
			echo "<div class='observacao_evento'>". $evento->getObservacao() ."</div>";
		echo "</div>";
	 }

	 if ($evento->getLink() != ''){
		echo "<div class='resultado'>";
			echo "<div class='link_evento'><a href='". $evento->getLink() ."' target='_blanck'>".$evento->getLink()."</a></div>";
		echo "</div>";
	 }
	
	// $sHtmlEvento = $sHtmlEvento . "<div class='resultado'>Cidade: ". $evento->getNomeCidade() ."</div>";
	// $sHtmlEvento = $sHtmlEvento . "<div class='resultado'>Estado: ". $evento->getNomeEstado() ."</div>";
	// $sHtmlEvento = $sHtmlEvento . "<br>";     
	echo "</div>";

	$i++;
}
?>