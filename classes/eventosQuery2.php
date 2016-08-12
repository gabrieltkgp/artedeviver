<?php
	include_once("eventos.php");
  include_once("tools.php");

  class EventosQuery2{

    private function getSelectEventos($pbEmailValido){
      $sSql = "SELECT ".
      "e.id, e.nome, e.local, e.endereco, e.observacao, e.link, e.data, e.privado, e.id_cidade, c.nome as nome_cidade, est.id as id_estado, est.nome as nome_estado ".
      "FROM ".
      "eventos e ".
      "join cidades c on c.id = e.id_cidade ".
      "join estados est on est.id = c.id_estado ".
      "WHERE ".
      "e.id_cidade = ? and ".
      "e.data >= now()";

      if(!$pbEmailValido){
        $sSql = $sSql . " AND e.privado = 0"; 
      }

       $sSql = $sSql . " ORDER BY e.data";

       return $sSql;
    }

    private function getSelectEmail(){
      return "SELECT e.email FROM lista_emails e WHERE e.email = ? ";
    }

    private function getSelectNomeCidade(){
      return "SELECT c.id, c.nome, e.sigla FROM cidades c JOIN estados e on e.id = c.id_estado WHERE c.id = ? ";
    }

    public function ConsultarNomeCidade($pnIdCidade){
      $oTools = new Tools();
      
      try {
        $oConn = $oTools->getConn();
      
        $sSql = $this->getSelectNomeCidade();

        $oStmt = $oConn->prepare($sSql);

        $oStmt->bind_param('i', $pnIdCidade);

        $oStmt->execute();

        $oStmt->store_result();

        $oStmt->bind_result($id, $nome, $sigla);

        $oStmt->fetch();

        $oStmt->free_result();

        $oStmt->close();

        $oConn->close();

      } catch(Exception $e){
        echo 'Caught exception: '.  $e->getMessage(). "\n";
      }

      // return $nome . " / ". $sigla;
      return $sigla . "/". $nome;
    }

    private function TestarSeEmailValido($psEmail){
     
      $oTools = new Tools();
      
      try {
        $oConn = $oTools->getConn();
      
        $sSql = $this->getSelectEmail();

        $oStmt = $oConn->prepare($sSql);

        $oStmt->bind_param('s', $psEmail);

        $oStmt->execute();

        $oStmt->store_result();

        $bEmailValido = $oStmt->num_rows > 0;

        $oStmt->free_result();

        $oStmt->close();

        $oConn->close();

      } catch(Exception $e){
        echo 'Caught exception: '.  $e->getMessage(). "\n";
      }

      return $bEmailValido;
    }

    private function createArrayEventos($pbEmailValido, $pnIdCidade){
      
      $eventosArray = array();

      $oTools = new Tools();

      $oConn = $oTools->getConn();
      
      $sSql = $this->getSelectEventos($pbEmailValido);
      $oStmt = $oConn->prepare($sSql);

      $oStmt->bind_param('i', $pnIdCidade);

      $oStmt->execute();

      $oStmt->store_result();

      $oStmt->bind_result($id, $nome, $local, $endereco, $observacao, $link, $data, $privado, $id_cidade, $nome_cidade, $id_estado, $nome_estado);

      if ($oStmt->num_rows > 0){
        $i = 1;
        while ($oStmt->fetch()) {
          $eventosArray[$i] = new Eventos();

          $eventosArray[$i]->setId($id);
          $eventosArray[$i]->setNome($nome);   
          $eventosArray[$i]->setLocal($local);   
          $eventosArray[$i]->setEndereco($endereco);
          $eventosArray[$i]->setObservacao($observacao);
          $eventosArray[$i]->setLink($link);
          $eventosArray[$i]->setData($data);
          $eventosArray[$i]->setPrivado($privado);
          $eventosArray[$i]->setIdCidade($id_cidade);
          $eventosArray[$i]->setNomeCidade($nome_cidade);
          $eventosArray[$i]->setIdEstado($id_estado);
          $eventosArray[$i]->setNomeEstado($nome_estado);

          $i = $i + 1;
        }  
      }

      $oStmt->free_result();

      $oStmt->close();

      $oConn->close();

      return $eventosArray;
    }

    private function setEventosArray(&$eventosArray, $i, $row){
      $eventosArray[$i] = new Eventos();

      $eventosArray[$i]->setId($row['id']);
      $eventosArray[$i]->setNome($row['nome']);      
      $eventosArray[$i]->setEndereco($row['endereco']);
      $eventosArray[$i]->setObservacao($row['observacao']);
      $eventosArray[$i]->setLink($row['link']);
      $eventosArray[$i]->setData($row['data']);
      $eventosArray[$i]->setPrivado($row['privado']);
      $eventosArray[$i]->setIdCidade($row['id_cidade']);
      $eventosArray[$i]->setNomeCidade($row['nome_cidade']);
      $eventosArray[$i]->setIdEstado($row['id_estado']);
      $eventosArray[$i]->setNomeEstado($row['nome_estado']);
    }

    // private function testarEmailECidadeValidos($psEmail, $pnIdCidade){
    //   return (!empty($psEmail) and !empty($pnIdCidade));  
    // }

    public function ConsultarEventosCadastrados($psEmail, $pnIdCidade){

      // if (!$this->testarEmailECidadeValidos($psEmail, $pnIdCidade)){
      //   return null;
      //   exit;
      // }

      $pbEmailValido = $this->TestarSeEmailValido($psEmail);

      $eventosArray = $this->createArrayEventos($pbEmailValido, $pnIdCidade);
      
      return $eventosArray;
    
    }  
  }
  
  
?>

