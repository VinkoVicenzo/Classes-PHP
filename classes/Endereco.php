<?php
	class Endereco{

		private $estado;
		private $cidade;
		private $logradouro;
		private $numero;
		private $complemento;

		public function setEndereco($estado, $cidade, $logradouro, $numero, $complemento){
			$this->estado=$estado;
			$this->cidade=$cidade;
			$this->logradouro=$logradouro;
			$this->numero=$numero;
			$this->complemento=$complemento;
		}

		public function getEstado(){
			return $this->estado;
		}

		public function getCidade(){
			return $this->cidade;
		}

		public function getLogradouro(){
			return $this->logradouro;
		}

		public function getNumero(){
			return $this->numero;
		}

		public function getComplemento(){
			return $this->complemento;
		}
	}
?>