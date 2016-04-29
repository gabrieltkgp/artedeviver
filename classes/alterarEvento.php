<?php
include_once("eventosOperacoes.php");

$nTaskId = $_POST['task_id'];
$sTaskName = $_POST['task_name_' . $nTaskId];
$sTaskDescription = $_POST['task_description_' . $nTaskId];
$nTypeId = $_POST['type_id_' . $nTaskId];
$nActive = $_POST['task_active_' . $nTaskId];

$oTaskOperation = new eventosOperacoes();

$oTaskOperation->executeUpdate($nTaskId, $sTaskName, $sTaskDescription, $nTypeId, $nActive); 

?>