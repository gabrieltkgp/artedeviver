<?php
include_once("eventosOperacoes.php");
 
$evento_nome = $_POST['evento_nome'];
$evento_local = $_POST['evento_local'];
$evento_endereco = $_POST['evento_endereco'];
$evento_observacao = $_POST['evento_observacao'];
$id_cidade = $_POST['idCidade'];
$evento_data = $_POST['evento_data'];
$evento_hora = $_POST['evento_hora'];
$evento_privado = $_POST['evento_privado'];
$evento_link = $_POST['evento_link'];

$eventosOperacoes = new eventosOperacoes();

$bSuccess = $eventosOperacoes->executeInsert($evento_nome, $evento_local, $evento_endereco, $evento_observacao, $id_cidade, $evento_data, $evento_hora, $evento_privado, $evento_link);
  
if($bSuccess){
	$return = "Novo evento inserido com sucesso!";
}
else{
	$return = "Erro ao inserir novo evento.";
}
 
echo $return;
?>