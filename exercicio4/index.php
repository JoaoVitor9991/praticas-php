<?php

require_once 'automoveis.php';

$garagem = [];

$arquivo = fopen('arquivo.csv', 'r');


while (($dados = fgetcsv($arquivo)) !== false) {
    $tipo = $dados[0];
    $marca = $dados[1];
    $ano = $dados[2];

    if ($tipo == 'automovel') {
        $novo_veiculo = new Automovel($tipo, $marca, $ano);
    } elseif ($tipo == 'aviao') {
        $novo_veiculo = new Aviao($tipo, $marca, $ano);
    } elseif ($tipo == 'barco') {
        $novo_veiculo = new Barco($tipo, $marca, $ano);
    }


    if (isset($novo_veiculo)) {
        $garagem[] = $novo_veiculo;
    }
}

fclose($arquivo);


echo "<h1>Minha Frota de Veículos</h1>";

foreach ($garagem as $veiculo) {
    
    echo $veiculo->apresentar() . "<br>";
}