<?php

require_once 'carrinho.php';
require_once 'produto.php';

$produto1 = new Produto('Mouse', 1000);
$produto2 = new Produto('Teclado', 1500);

$carrinho = new Carrinho();

$carrinho->adicionar($produto1);
$carrinho->adicionar($produto2);

echo "Total da compra: R$ " . $carrinho->calcular_total();