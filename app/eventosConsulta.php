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
	if ($evento->getPrivado()){
		echo "<fieldset id=div_".$i."_tp".$evento->getIdTipoEvento()." class='privado'>";
		echo "<legend style=\"font-family: 'Bree';  color: #FFA500; text-align: right;\">Restrito </legend>";
	}
	else{
		echo "<fieldset id=div_".$i."_tp".$evento->getIdTipoEvento()." class='evento'>";	
	}
	
	echo "<div class='resultado'>";
	echo 	"<div class='nome_evento'>". $evento->getNome() ."</div>";
	// echo 	"<div class='data_evento'>". $evento->getOnlyDate() ."</div>";
	echo "</div>";
	echo "<div class='resultado'>";
	echo 	"<div class='data_evento'>". strtoupper ($evento->getOnlyDate()) ."</div>";
	// echo 	"<div class='hora_evento'> | ". $evento->getOnlyTime() ."h </div>";
	echo 	"<div class='hora_evento'> | ". strtoupper ($evento->getOnlyHour()) ."h". strtoupper ($evento->getOnlyMinute()) . "&nbsp;-&nbsp;". strtoupper ($evento->getLocal()) ."</div>";
	echo "</div>";
	echo "<div class='resultado'>";
	// echo 	"<div class='local_evento'> &nbsp;-&nbsp;". $evento->getLocal() ." </div>";
	
	if ($evento->getEndereco() != ''){
		echo 	"<div class='endereco_evento'>". strtoupper ($evento->getEndereco()) ." </div>";	
	}

	echo "</div>";
	
	if ($evento->getObservacao() != ''){
		echo "<div class='resultado'>";
			echo "<div class='observacao_evento'>". strtoupper ($evento->getObservacao()) ."</div>";
		echo "</div>";
	 }

	if ($evento->getLink() != ''){
		echo "<div class='resultado'>";
			echo "<div><a href='". $evento->getLink() ."' target='_blanck'><div class='link_evento'>CONFIRA MAIS INFORMAÇÕES >> </div></a></div>";
		echo "</div>";
	}

	if ($evento->getMap() != ''){
		echo "<div class='resultado'>";
			echo "<div><a href='". $evento->getMap() ."' target='_blanck'><div class='link_evento'>VER MAPA >> </div></a></div>";
		echo "</div>";
	}
	
	// $sHtmlEvento = $sHtmlEvento . "<div class='resultado'>Cidade: ". $evento->getNomeCidade() ."</div>";
	// $sHtmlEvento = $sHtmlEvento . "<div class='resultado'>Estado: ". $evento->getNomeEstado() ."</div>";
	// $sHtmlEvento = $sHtmlEvento . "<br>";     
	echo "</fieldset>";
	echo "<br>";

	$i++;
}
?>


