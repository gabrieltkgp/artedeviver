<?php
	class Eventos{

		private $id;
		private $nome;
		private $local;
		private $endereco;
		private $observacao;
		private $link;
		private $data;
		private $privado;
		private $idCidade;
		private $nomeCidade;
		private $idEstado;
		private $nomeEstado;

		public function setId($id){
			$this->id = $id;
		}

		public function getId(){
			return $this->id;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setLocal($local){
			$this->local = $local;
		}

		public function getLocal(){
			return $this->local;
		}

		public function setEndereco($endereco){
			if ($endereco == null){
				$this->endereco = '';
			}else{
				$this->endereco = $endereco;	
			}
		}

		public function getEndereco(){
			return $this->endereco;
		}

		public function setObservacao($observacao){
			if ($observacao == null){
				$this->observacao = '';
			}else{
				$this->observacao = $observacao;	
			}			
		}

		public function getObservacao(){
			return $this->observacao;
		}

		public function setLink($link){
			if ($link == null){
				$this->link = '';
			}else{
				$this->link = $link;	
			}
		}

		public function getLink(){
			return $this->link;
		}

		public function setData($data){
			$this->data = $data;
		}

		public function getData(){
			return $this->data;
		}

		public function getDateFormated(){
			$datahora = strtotime($this->data);
			return date("d/m/Y h:i:s", $datahora);
		}

		public function getOnlyDate(){
			setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
			date_default_timezone_set('America/Sao_Paulo');
			$datahora = strtotime($this->data);
			return strftime('%d/%B', $datahora);
			//return date("d - M ", $datahora);
		}

		public function getOnlyTime(){
			$datahora = strtotime($this->data);
			return date("h", $datahora);
		}

		public function setPrivado($privado){
			$this->privado = $privado;
		}

		public function getPrivado(){
			return $this->privado;
		}

		public function setIdCidade($idCidade){
			$this->idCidade = $idCidade;
		}

		public function getIdCidade(){
			return $this->idCidade;
		}

		public function setNomeCidade($nomeCidade){
			$this->nomeCidade = $nomeCidade;
		}

		public function getNomeCidade(){
			return $this->nomeCidade;
		}

		public function setIdEstado($idEstado){
			$this->idEstado = $idEstado;
		}

		public function getIdEstado(){
			return $this->idEstado;
		}

		public function setNomeEstado($nomeEstado){
			$this->nomeEstado = $nomeEstado;
		}

		public function getNomeEstado(){
			return $this->nomeEstado;
		}
	}
?>