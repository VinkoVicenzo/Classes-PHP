	<?php
include "./classes/Produto.php";
include "./classes/Categoria.php";
include "./classes/Clientes.php";
include "./classes/Endereco.php";
include "./classes/Pedido_Produto.php";

$categoria= new Categoria();
$categoria->setCategoria("4232", "Sabão em Pó");

$produto= new Produto();
$produto->setProduto("1234", $categoria, "Sabão em Pó - OMO", "R$:29,90", "1");

$arrayProduto[] = $produto;

$categoria= new Categoria();
$categoria->setCategoria("55342", "Detergente");

$produto= new Produto();
$produto->setProduto("4443", $categoria, "Detergente - Limpol", "R$:6,49", "2");

$arrayProduto[] = $produto;

$endereco=new Endereco();
$endereco->setEndereco("Rio Grande do Sul", "Taquara", "Joao de Barro", "266", "201");

$pedido_produto= new Pedido_Produto();
$pedido_produto->setPedido_Produto("323", $arrayProduto, "13/08/2021");

$cliente= new Cliente();
$cliente->setCliente("123", "Vinko Vicenzo", $endereco, "(51) - 99814-9982", "Bom", "R$:200,00", $pedido_produto);

print_r($cliente);
