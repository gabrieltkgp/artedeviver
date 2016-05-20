<?php
	include("eventos.php");
  include_once("tools.php");

  class EventosQuery{

    private $eventosArray = array();

    private function getSelectEventos($pbEmailValido){
      $sSql = "SELECT ".
      "e.id, e.nome, e.local, e.endereco, e.observacao, e.data, e.privado, e.id_cidade, c.nome as nome_cidade, est.id as id_estado, est.nome as nome_estado ".
      "FROM ".
      "eventos e ".
      "join cidades c on c.id = e.id_cidade ".
      "join estados est on est.id = c.id_estado ".
      "WHERE ".
      "e.id_cidade = ? ";

      if(!$pbEmailValido){
        $sSql = $sSql . " AND e.privado = 0"; 
      }

       $sSql = $sSql . " ORDER BY e.data";

       return $sSql;
    }

    private function getSelectEmail(){
      return "SELECT e.email FROM lista_emails e WHERE e.email = ? ";
    }

    private function getCidadeNome(){
      return "SELECT c.nome FROM cidades c WHERE c.id = ? ";
    }

    private function TestarSeEmailValido($psEmail){
      $oTools = new Tools();

      $oConn = $oTools->getConn();
      
      $sSql = $this->getSelectEmail();

      $oStmt = $oConn->stmt_init();
      //$oStmt = $oConn->prepare($sSql);
      $oStmt->prepare($sSql);

      $oStmt->bind_param('s', $psEmail);

      $oStmt->execute();

      $oResult = $oStmt->get_result(); 
      
      if($oResult->num_rows > 0){
        return true;
        exit;
      }

      return false;
    }

    private function executeQueryEventos($pbEmailValido, $pnIdCidade){
      $oTools = new Tools();

      $oConn = $oTools->getConn();
      
      $sSql = $this->getSelectEventos($pbEmailValido);
      $oStmt = $oConn->prepare($sSql);

      $oStmt->bind_param('i', $pnIdCidade);

      $oStmt->execute();
      
      return $oStmt->get_result(); 
    }

    private function createArrayEventos($pbEmailValido, $pnIdCidade){
      $oResult = $this->executeQueryEventos($pbEmailValido, $pnIdCidade);

      $eventosArray = array();
      if($oResult->num_rows > 0) {
        
        $i = 1;

        while($row = $oResult->fetch_assoc()){
          $this->setEventosArray($eventosArray, $i, $row);
          $i = $i + 1;
        }
      }

      return $eventosArray;
    }

    private function setEventosArray(&$eventosArray, $i, $row){
      $eventosArray[$i] = new Eventos();

      $eventosArray[$i]->setId($row['id']);
      $eventosArray[$i]->setNome($row['nome']);      
      $eventosArray[$i]->setEndereco($row['endereco']);
      $eventosArray[$i]->setObservacao($row['observacao']);
      $eventosArray[$i]->setData($row['data']);
      $eventosArray[$i]->setPrivado($row['privado']);
      $eventosArray[$i]->setIdCidade($row['id_cidade']);
      $eventosArray[$i]->setNomeCidade($row['nome_cidade']);
      $eventosArray[$i]->setIdEstado($row['id_estado']);
      $eventosArray[$i]->setNomeEstado($row['nome_estado']);
    }

    private function testarEmailECidadeValidos($psEmail, $pnIdCidade){
      return (!empty($psEmail) and !empty($pnIdCidade));  
    }

    public function getEventosCadastrados($psEmail, $pnIdCidade){

      if (!$this->testarEmailECidadeValidos($psEmail, $pnIdCidade)){
        return null;
        exit;
      }

      $pbEmailValido = $this->TestarSeEmailValido($psEmail);

      $oResult = $this->executeQueryEventos($pbEmailValido, $pnIdCidade);

      $eventosArray = $this->createArrayEventos($pbEmailValido, $pnIdCidade);

      return $eventosArray;
    }  
  }
  
  
?>

