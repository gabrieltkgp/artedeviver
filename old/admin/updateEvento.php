<?php
include_once("eventosOperacoes.php");

$evento_id = $_POST['evento_id']; 
$evento_nome = $_POST['evento_nome_' . $evento_id];
$evento_local = $_POST['evento_local_' . $evento_id];
$evento_endereco = $_POST['evento_endereco_' . $evento_id];
$evento_observacao = $_POST['evento_observacao_' . $evento_id];
$id_cidade = $_POST['idCidade_' . $evento_id];
$evento_data = $_POST['evento_data_' . $evento_id];
$evento_hora = $_POST['evento_hora_' . $evento_id];
$evento_privado = $_POST['evento_privado_' . $evento_id];
$evento_link = $_POST['evento_link_' . $evento_id];
$evento_map = $_POST['evento_map_' . $evento_id];

$oEventosOperacoes = new eventosOperacoes();

$bSuccess = $oEventosOperacoes->executeUpdate($evento_id, $evento_nome, $evento_local, $evento_endereco, $evento_observacao, $id_cidade, $evento_data, $evento_hora, $evento_privado, $evento_link, $evento_map); 
  
if($bSuccess){
	$return = "Evento alterado com sucesso!";
}
else{
	$return = "Erro ao alterar evento.";
}

?>