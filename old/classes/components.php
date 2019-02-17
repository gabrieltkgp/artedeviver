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
	
	public function createEstadosDropDown($pnSelecionarId=0){
		$oConn = $this->oTools->getConn();

		$oStmt = $oConn->prepare($this->queryEstados());	
		
		$oStmt->execute();

		$oStmt->store_result();

      	$oStmt->bind_result($id, $sigla, $nome);

		//$oResult = $this->oStmt->get_result();

		$sDropDown = "<select id='selection_estados' name='idEstado' class='combobox'> ";
		$sDropDown = $sDropDown . "<option value=''></option> ";
		if($oStmt->num_rows > 0) {
			while($oStmt->fetch()){
				$sSelecionar = $id == $pnSelecionarId ? "selected='selected'" : "";
				$sDropDown = $sDropDown . "<option value=$id $sSelecionar>$nome</option> ";
			}
		}
		$sDropDown = $sDropDown . "</select> ";

		$oStmt->free_result();

		$oStmt->close();

		$oConn->close();

		return $sDropDown;
	}

	private function queryCidades(){
		// return "SELECT c.id, c.nome, c.id_estado, e.sigla FROM cidades c JOIN estados e on e.id = c.id_estado WHERE c.id_estado = ? ORDER BY e.sigla, c.id";
		return "SELECT c.id, c.nome, c.id_estado, e.sigla FROM cidades c JOIN estados e on e.id = c.id_estado ORDER BY e.sigla, c.nome";
	}
	
	// public function createCidadesDropDown($pnIdEstado, $pbExibirEstado=true){
	public function createCidadesDropDown($pnSelecionarId=0, $pbExibirEstado=true, $pnIdUpdate=0){
		$cidade = $this->oTools->getUsersCityName();

		$oConn = $this->oTools->getConn();

		$oStmt = $oConn->prepare($this->queryCidades());
	   	// $oStmt->bind_param('i', $pnIdEstado);	
		$oStmt->execute();

		$oStmt->store_result();

      	$oStmt->bind_result($id, $nome, $idEstado, $sigla);

		//$oResult = $this->oStmt->get_result();
      	if ($pnIdUpdate == 0){
			$sDropDown = "<select id='idCidade' name='idCidade' class='combobox'> ";
		} else {
			$sDropDown = "<select id='idCidade_" . $pnIdUpdate . "' name='idCidade_" . $pnIdUpdate . "' class='combobox'> ";
		}
		if($oStmt->num_rows > 0) {
			while($oStmt->fetch()){
				if ($pnSelecionarId==0){
					//echo $nome;
					$sSelecionar = strtoupper($cidade) == strtoupper($nome) ? "selected='selected'" : "";
				}
				else {
					$sSelecionar = $id == $pnSelecionarId ? "selected='selected'" : "";
				}

				if ($pbExibirEstado) {
					$sDropDown = $sDropDown . "<option value=$id $sSelecionar>$sigla/$nome</option> ";
				} else{
					$sDropDown = $sDropDown . "<option value=$id $sSelecionar>$nome</option> ";	
				}
				
			}
		}
		$sDropDown = $sDropDown . "</select> ";

		$oStmt->free_result();

		$oStmt->close();

		$oConn->close();

		return $sDropDown;
	}

	public function createDropDownEmpty($psId, $psName){
		
		$sDropDown = "<select id='$psId' name='$psName' class='combobox'> ";
		$sDropDown = $sDropDown . "</select> ";

		return $sDropDown;
	}
}
?>