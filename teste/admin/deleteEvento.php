<?php
include_once("eventosOperacoes.php");

$evento_id = $_POST['evento_id']; 

$oEventosOperacoes = new eventosOperacoes();

$bSuccess = $oEventosOperacoes->executeDelete($evento_id); 
  
if($bSuccess){
	$return = "Evento excluído com sucesso!";
}
else{
	$return = "Erro ao exluir evento.";
}

?>