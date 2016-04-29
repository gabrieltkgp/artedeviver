<?php
include_once("classes/tools.php");
include_once("classes/config.php");

class ConsultarEventos{

	private $oTools;
	private $oConn;

	function __construct(){
		$this->oTools = new Tools();
		$this->oConn = $this->oTools->getConn();
		$this->oConn->set_charset('utf8');
	}

	private function ConsultarListaEventos($pnIdCidade, $pbEmailValido){
		//$sSql = "SELECT e.id, e.nome, e.local, e.data, e.id_cidade, e.privado FROM eventos e WHERE e.data >= now() AND e.id_cidade = ? ";
		$sSql = "SELECT e.id, e.nome, e.local, e.endereco, e.observacao, e.data, e.id_cidade, e.privado FROM eventos e WHERE e.id_cidade = ? ";

		if(!$pbEmailValido){
			$sSql = $sSql . " AND e.privado = 0";	
		}

		$sSql = $sSql . " ORDER BY e.data";

		$oStmt = $this->oConn->prepare($sSql);

		$oStmt->bind_param('i', $pnIdCidade);

		$oStmt->execute();

		$oResult = $oStmt->get_result();

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

		return $returnJson;
	}

	private function TestarEmailValido($psEmail){ 
		$sSql = "SELECT e.email FROM lista_emails e WHERE e.email = ? ";

		$oStmt = $this->oConn->prepare($sSql);
		$oStmt->bind_param('s', $psEmail);

		$oStmt->execute();

		$oResult = $oStmt->get_result(); 

		if (!$oResult) {
  			http_response_code(404);
  			die($oConn->error());
		}
 
		if($oResult->num_rows <= 0) {
			return False;
		}	
		return True;
	}

	public function Consultar(){

		$method = $_SERVER['REQUEST_METHOD'];

		if ($method == 'POST'){
			$sEmail = $_POST['email'];
    		$sIdCidade = $_POST['idCidade'];
		} elseif($method == 'GET'){
			$sEmail = $_GET['email'];
    		$sIdCidade = $_GET['idCidade'];
		}

		if (($sEmail == "") or ($sIdCidade == "")){
			return;
		}

    	$bEmailValido = $this->TestarEmailValido($sEmail);

		$sJson = $this->ConsultarListaEventos(intval($sIdCidade), $bEmailValido);

		if ($sJson <> "") {
			header('Content-Type: application/json');
			echo $sJson;
		}
	}
}

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
} 
	
if ($_SERVER['PHP_AUTH_USER'] != $auth_username){
	header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
}

if (sha1($_SERVER['PHP_AUTH_PW']) != $auth_password){
	header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
}

$oConsultarEventos = new ConsultarEventos();

$oConsultarEventos->Consultar();
?>
 