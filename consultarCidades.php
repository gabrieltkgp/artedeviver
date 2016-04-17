<?php
include_once("classes/tools.php");

class ConsultarCidades{

	public function Consultar(){
		$oTools = new Tools();

		$oConn = $oTools->getConn();

		$oConn->set_charset('utf8');
 
		$sSql = "SELECT c.id, c.nome, e.id as id_estado, e.sigla, e.nome as nome_estado FROM cidades c JOIN estados e ON c.id_estado = e.id ORDER BY e.nome, c.nome";

		$oResult = $oConn->query($sSql);
 
		if (!$oResult) {
  			http_response_code(404);
  			die($oConn->error());
		}

		if($oResult->num_rows <= 0){
			exit;
		}

		$returnJson = "";
		while($row = $oResult->fetch_assoc()){
			$array[] = $row;
			$returnJson = json_encode($array);
		}

		header('Content-Type: application/json');
		echo $returnJson;
		}
}

$oConsultarCidades = new ConsultarCidades();

$oConsultarCidades->Consultar();
?>
 