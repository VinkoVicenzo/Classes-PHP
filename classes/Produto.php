<?php

	class Produto{

		private $codigo;
		private $nome_prod;
		private $categoria;
		private $preco;
		private $quantidade;

			public function setProduto($codigo, $categoria, $nome_prod, $preco, $quantidade){
				$this->codigo=$codigo;
				$this->categoria=$categoria;
				$this->nome_prod=$nome_prod;
				$this->preco=$preco;
				$this->quantidade=$quantidade;
			} 

			public function getCodigo(){
				return $this->codigo;
			}

			public function getCategoria(){
				return $this->categoria;
			}

			public function getNome_Prod(){
				return $this->nome_prod;
			}

			public function getPreco(){
				return $this->preco;
			}

			public function getQuantidade(){
				return $this->quantidade;
			}
	}
	
?>