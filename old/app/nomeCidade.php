<?php
include_once("../classes/eventosQuery2.php");

$eventosQuery = new EventosQuery2();

// echo "<h1>".$eventosQuery->ConsultarNomeCidade($_POST['idCidade']) ."</h1>";
echo $eventosQuery->ConsultarNomeCidade($_POST['idCidade']);

?>