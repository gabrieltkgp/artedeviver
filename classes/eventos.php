<?php
	class Eventos{

		private $id;
		private $nome;
		private $local;
		private $endereco;
		private $observacao;
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

		public function setEndereco($endereco){
			$this->endereco = $endereco;
		}

		public function getEndereco(){
			return $this->endereco;
		}

		public function setObservacao($observacao){
			$this->observacao = $observacao;
		}

		public function getObservacao(){
			return $this->observacao;
		}

		public function setData($data){
			$this->data = $data;
		}

		public function getData(){
			return $this->data;
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