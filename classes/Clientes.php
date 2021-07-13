<?php
	class Cliente{
			
		private $codigo;
		private $nome;
		private $endereco;
		private $telefone;
		private $status;
		private $limite_Cred;
		private $Pedido_Produto;

		public function setCliente($codigo, $nome, $endereco, $telefone, $status, $limite_Cred, $Pedido_Produto){
			$this->codigo=$codigo;
			$this->nome=$nome;
			$this->endereco=$endereco;
			$this->telefone=$telefone;
			$this->status=$status;
			$this->limite_Cred=$limite_Cred;
			$this->Pedido_Produto=$Pedido_Produto;
		}

		public function getCliente(){
			return $this->codigo;
			return $this->nome;
			return $this->endereco;
			return $this->telefone;
			return $this->status;
			return $this->limite_Cred;
		}

		public function getCodigo(){
			return $this->codigo;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getEndereco(){
			return $this->endereco;
		}

		public function getTelefone(){
			return $this->telefone;
		}

		public function getStatus(){
			return $this->status;
		}

		public function getLimite_Cred(){
			return $this->limite_Cred;
		}

		public function getPedido_Produto(){
			return $this->Pedido_Produto;
		}
	}
?>