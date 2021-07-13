<?php
	class Categoria{

		private $codigo;
		private $tipo;

		public function setCategoria($codigo, $tipo){
			$this->codigo=$codigo;
			$this->tipo=$tipo;
		}		

		public function getCodigo(){
			return $this->codigo;
		}

		public function getTipo(){
			return $this->tipo;
		}
	}
?>