<?php
include_once("tools.php");

class Components{

	private $oTools;
	private $oConn;
	private $oStmt;

	function __construct(){
		$this->oTools = new Tools();
		$this->oConn = $this->oTools->getConn();
	}

	private function queryEstados(){
		$sSql = "SELECT id, sigla, nome FROM estados ORDER BY nome";
	   	$this->oStmt = $this->oConn->prepare($sSql);	
		$this->oStmt->execute();
	}
	
	public function createEstadosDropDown(){
		$this->queryEstados();

		$this->oStmt->store_result();

      	$this->oStmt->bind_result($id, $sigla, $nome);

		//$oResult = $this->oStmt->get_result();

		$sDropDown = "<select id='selection_estados' name='idEstado' class='campo'> ";
		$sDropDown = $sDropDown . "<option value=''></option> ";
		if($this->oStmt->num_rows > 0) {
			while($this->oStmt->fetch()){
				$sDropDown = $sDropDown . "<option value=$id>$nome</option> ";
			}
		}
		$sDropDown = $sDropDown . "</select> ";

		$this->oStmt->free_result();

		return $sDropDown;
	}

	private function queryCidades($pnIdEstado){
		$sSql = "SELECT id, nome, id_estado FROM cidades WHERE id_estado = ? ORDER BY nome";
	   	$this->oStmt = $this->oConn->prepare($sSql);
	   	$this->oStmt->bind_param('i', $pnIdEstado);	
		$this->oStmt->execute();
	}
	
	public function createCidadesDropDown($pnIdEstado){
		$this->queryCidades($pnIdEstado);

		$this->oStmt->store_result();

      	$this->oStmt->bind_result($id, $nome, $idEstado);

		//$oResult = $this->oStmt->get_result();

		$sDropDown = "<select id='selection_cidades' name='idCidade' class='campo'> ";
		if($this->oStmt->num_rows > 0) {
			while($this->oStmt->fetch()){
				$sDropDown = $sDropDown . "<option value=$id>$nome</option> ";
			}
		}
		$sDropDown = $sDropDown . "</select> ";

		$this->oStmt->free_result();

		return $sDropDown;
	}

	public function createDropDownEmpty($psId, $psName){
		
		$sDropDown = "<select id='$psId' name='$psName' class='campo'> ";
		$sDropDown = $sDropDown . "</select> ";

		return $sDropDown;
	}
}
?>