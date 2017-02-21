<?php
	include_once("eventos.php");
  include_once("tools.php");
  include_once("tipoEvento.php");

  class EventosQuery2{

    private function getSelectEventos($pbEmailValido){
      $sSql = "SELECT ".
      "e.id, e.nome, e.local, e.endereco, e.observacao, e.link, e.data, e.privado, e.id_cidade, c.nome as nome_cidade, est.id as id_estado, est.nome as nome_estado, e.map, e.id_tipo_evento ".
      "FROM ".
      "eventos e ".
      "join cidades c on c.id = e.id_cidade ".
      "join estados est on est.id = c.id_estado ".
      "WHERE ".
      "e.id_cidade = ? and ".
//      "e.data >= now() - INTERVAL 30 DAY";
      "e.data >= now() - INTERVAL 1 DAY";

      if(!$pbEmailValido){
        $sSql = $sSql . " AND e.privado = 0"; 
      }

       $sSql = $sSql . " ORDER BY e.data";

       return $sSql;
    }

    private function getSelectEmail(){
      return "SELECT e.id, e.email FROM lista_emails e WHERE e.email = ? ";
    }

    private function getSelectNomeCidade(){
      return "SELECT c.id, c.nome, e.sigla FROM cidades c JOIN estados e on e.id = c.id_estado WHERE c.id = ? ";
    }

    private function getSelectTiposEvento(){
      return "SELECT tp.id, tp.descricao FROM tipo_evento tp ";
    }
	
    private function getSelectFiltro($pbEmailValido){
      $sSql = "SELECT distinct e.id_tipo_evento, t.descricao 
		FROM eventos e 
		JOIN tipo_evento t ON e.id_tipo_evento = t.id
		WHERE 
			e.id_cidade = ? and 
		      	e.data >= now() - INTERVAL 1 DAY";

      if(!$pbEmailValido){
        $sSql = $sSql . " AND e.privado = 0"; 
      }

      return $sSql;
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

        $oStmt->bind_result($nId, $sEmail);

        $oStmt->fetch();

        $bEmailValido = $oStmt->num_rows > 0;

        //$bEmailValido = ();

        $oStmt->free_result();

        $oStmt->close();

        $oConn->close();

      } catch(Exception $e){
        echo 'Caught exception: '.  $e->getMessage(). "\n";
      }

      //return $psEmail == $sEmail;
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

      $oStmt->bind_result($id, $nome, $local, $endereco, $observacao, $link, $data, $privado, $id_cidade, $nome_cidade, $id_estado, $nome_estado, 
        $map, $id_tipo_evento);

      if ($oStmt->num_rows > 0){
        $i = 1;
        while ($oStmt->fetch()) {
          $this->setEventosArray($eventosArray, $i, $id, $nome, $local, $endereco, $observacao, $link, $data, $privado, $id_cidade, $nome_cidade, $id_estado, $nome_estado, $map, $id_tipo_evento);
          $i = $i + 1;
        }  
      }

      $oStmt->free_result();

      $oStmt->close();

      $oConn->close();

      return $eventosArray;
    }

    private function setEventosArray(&$eventosArray, $i, $id, $nome, $local, $endereco, $observacao, $link, $data, $privado, $id_cidade, $nome_cidade, $id_estado, $nome_estado, $map, $id_tipo_evento){
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
      $eventosArray[$i]->setMap($map);
      $eventosArray[$i]->setIdTipoEvento($id_tipo_evento);
    }

    private function createArrayTiposEvento(){
      
      $tiposEventoArray = array();

      $oTools = new Tools();

      $oConn = $oTools->getConn();
      
      $sSql = $this->getSelectTiposEvento();
      $oStmt = $oConn->prepare($sSql);

      //$oStmt->bind_param('i', $pnIdCidade);

      $oStmt->execute();

      $oStmt->store_result();

      $oStmt->bind_result($id, $descricao);

      if ($oStmt->num_rows > 0){
        $i = 1;
        while ($oStmt->fetch()) {
          $this->setEventosArray($tiposEventoArray, $i, $id, $descricao);
          $i = $i + 1;
        }  
      }

      $oStmt->free_result();

      $oStmt->close();

      $oConn->close();

      return $tiposEventoArray;
    }

    private function setTiposEventoArray(&$tiposEventoArray, $i, $id, $descricao){
      $tiposEventoArray[$i] = new TipoEvento();

      $tiposEventoArray[$i]->setId($id);
      $tiposEventoArray[$i]->setDescricao($descricao);   
    }

    // private function setEventosArray(&$eventosArray, $i, $row){
    //   $eventosArray[$i] = new Eventos();

    //   $eventosArray[$i]->setId($row['id']);
    //   $eventosArray[$i]->setNome($row['nome']);      
    //   $eventosArray[$i]->setEndereco($row['endereco']);
    //   $eventosArray[$i]->setObservacao($row['observacao']);
    //   $eventosArray[$i]->setLink($row['link']);
    //   $eventosArray[$i]->setData($row['data']);
    //   $eventosArray[$i]->setPrivado($row['privado']);
    //   $eventosArray[$i]->setIdCidade($row['id_cidade']);
    //   $eventosArray[$i]->setNomeCidade($row['nome_cidade']);
    //   $eventosArray[$i]->setIdEstado($row['id_estado']);
    //   $eventosArray[$i]->setNomeEstado($row['nome_estado']);
    //   $eventosArray[$i]->setMap($row['map']);
    // }

    // private function testarEmailECidadeValidos($psEmail, $pnIdCidade){
    //   return (!empty($psEmail) and !empty($pnIdCidade));  
    // }

    private function createArrayFiltro($pbEmailValido, $pnIdCidade){

      $filtroArray = array();

      $oTools = new Tools();

      $oConn = $oTools->getConn();

      $sSql = $this->getSelectFiltro($pbEmailValido);
      $oStmt = $oConn->prepare($sSql);

      $oStmt->bind_param('i', $pnIdCidade);

      $oStmt->execute();

      $oStmt->store_result();

      $oStmt->bind_result($id, $descricao);

      if ($oStmt->num_rows > 0){
        $i = 1;
        while ($oStmt->fetch()) {
          $this->setFiltroArray($filtroArray, $i, $id, $descricao);
          $i = $i + 1;
        }
      }

      $oStmt->free_result();

      $oStmt->close();

      $oConn->close();

      return $filtroArray;
    }

    private function setFiltroArray(&$filtroArray, $i, $id, $descricao){
      $filtroArray[$i] = new TipoEvento();

      $filtroArray[$i]->setId($id);
      $filtroArray[$i]->setDescricao($descricao);
    }

    public function ConsultarEventosCadastrados($psEmail, $pnIdCidade){

      // if (!$this->testarEmailECidadeValidos($psEmail, $pnIdCidade)){
      //   return null;
      //   exit;
      // }

      $pbEmailValido = $this->TestarSeEmailValido($psEmail);

      $eventosArray = $this->createArrayEventos($pbEmailValido, $pnIdCidade);
      
      return $eventosArray;
    
    }  

    public function ConsultarTiposEventosCadastrados(){

      $tiposEventoArray = $this->createArrayTiposEvento();
      
      return $tiposEventoArray;
    
    }

    public function MontarFiltro($psEmail, $pnIdCidade){

      $pbEmailValido = $this->TestarSeEmailValido($psEmail);

      $filtroArray = $this->createArrayFiltro($pbEmailValido, $pnIdCidade);
      
      return $filtroArray;
    
    }
  
  }
  
  
?>

