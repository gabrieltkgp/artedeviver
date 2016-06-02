<?php
include_once("tools.php");

class Components{

	private $oTools;

	function __construct(){
		$this->oTools = new Tools();
	}

	private function queryEstados(){
		return "SELECT id, sigla, nome FROM estados ORDER BY nome";
	}
	
	public function createEstadosDropDown(){
		$oConn = $this->oTools->getConn();

		$oStmt = $oConn->prepare($this->queryEstados());	
		
		$oStmt->execute();

		$oStmt->store_result();

      	$oStmt->bind_result($id, $sigla, $nome);

		//$oResult = $this->oStmt->get_result();

		$sDropDown = "<select id='selection_estados' name='idEstado' class='campo'> ";
		$sDropDown = $sDropDown . "<option value=''></option> ";
		if($oStmt->num_rows > 0) {
			while($oStmt->fetch()){
				$sDropDown = $sDropDown . "<option value=$id>$nome</option> ";
			}
		}
		$sDropDown = $sDropDown . "</select> ";

		$oStmt->free_result();

		$oStmt->close();

		$oConn->close();

		return $sDropDown;
	}

	private function queryCidades(){
		return "SELECT id, nome, id_estado FROM cidades WHERE id_estado = ? ORDER BY id";
	}
	
	public function createCidadesDropDown($pnIdEstado){
		$oConn = $this->oTools->getConn();

		$oStmt = $oConn->prepare($this->queryCidades());
	   	$oStmt->bind_param('i', $pnIdEstado);	
		$oStmt->execute();

		$oStmt->store_result();

      	$oStmt->bind_result($id, $nome, $idEstado);

		//$oResult = $this->oStmt->get_result();

		$sDropDown = "<select id='selection_cidades' name='idCidade' class='campo'> ";
		if($oStmt->num_rows > 0) {
			while($oStmt->fetch()){
				$sDropDown = $sDropDown . "<option value=$id>$nome</option> ";
			}
		}
		$sDropDown = $sDropDown . "</select> ";

		$oStmt->free_result();

		$oStmt->close();

		$oConn->close();

		return $sDropDown;
	}

	public function createDropDownEmpty($psId, $psName){
		
		$sDropDown = "<select id='$psId' name='$psName' class='campo'> ";
		$sDropDown = $sDropDown . "</select> ";

		return $sDropDown;
	}
}
?>