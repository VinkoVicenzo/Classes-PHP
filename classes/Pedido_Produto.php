<?php
    class Pedido_Produto{

        private $codigo;
        private $data_pedido;
        private $produto;

        public function setPedido_Produto($codigo, $produto, $data_pedido){
            $this->codigo=$codigo;
            $this->produto=$produto;
            $this->data_pedido=$data_pedido;
        }

        public function getCodigo(){
            return $this->codigo;
        }

        public function getProduto(){
            return $this->produto;
        }

        public function getData_Pedido(){
            return $this->data_pedido;
        }
    }
?>