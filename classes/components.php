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

		$oResult = $this->oStmt->get_result();

		$sDropDown = "<select id='selection_estados' name='estados'> ";
		$sDropDown = $sDropDown . "<option value=''></option> ";
		if($oResult->num_rows > 0) {
			while($row = $oResult->fetch_assoc()){
				$sDropDown = $sDropDown . "<option value=$row[id]>$row[sigla]</option> ";
			}
		}
		$sDropDown = $sDropDown . "</select> ";

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

		$oResult = $this->oStmt->get_result();

		$sDropDown = "<select id='selection_cidades' name='cidades'> ";
		if($oResult->num_rows > 0) {
			while($row = $oResult->fetch_assoc()){
				$sDropDown = $sDropDown . "<option value=$row[id]>$row[nome]</option> ";
			}
		}
		$sDropDown = $sDropDown . "</select> ";

		return $sDropDown;
	}

	public function createDropDownEmpty($psId, $psName){
		
		$sDropDown = "<select id=$psId name=$psName> ";
		$sDropDown = $sDropDown . "</select> ";

		return $sDropDown;
	}
}
?>