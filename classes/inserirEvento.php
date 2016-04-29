<?php

include_once("eventosOperacoes.php");
 
$task_name = $_POST['task_name'];
$task_description = $_POST['task_description'];
$type_id = $_POST['type_id'];
$feature_id = $_POST['feat_id'];

$taskOperation = new eventosOperacoes();

$bSuccess = $taskOperation->executeInsert($feature_id, $task_name, $task_description, $type_id);
  
if($bSuccess){
	$return = "Novo evento inserido com sucesso!";
}
else{
	$return = "Erro ao inserir novo evento.";
}
 
echo $return;
?>