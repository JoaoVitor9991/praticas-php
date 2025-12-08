<?php

require_once('desafio.php');

$cinco = new Numero(5);
$n2 = new Numero(7);
$n3 = new Numero(16);
$n4 = new Numero(123);
echo '<pre>';

echo $cinco->get_numero() ."<br>";
echo $cinco->par_impar() . "<br>";
echo $cinco->raiz_quadrada() ."<br>";
$lista_tabuada = $cinco->tabuada();

foreach ($lista_tabuada as $frase){
    echo $frase . "<br>";
}

echo '<hr>'; 

echo $n2->get_numero() ."<br>";
echo $n2->par_impar() . "<br>";
echo $n2->raiz_quadrada() ."<br>";
$lista_tabuada = $n2->tabuada();

foreach ($lista_tabuada as $frase){
    echo $frase . "<br>";
}
echo '<hr>';

echo $n3->get_numero() ."<br>";
echo $n3->par_impar() . "<br>";
echo $n3->raiz_quadrada() ."<br>";
$lista_tabuada = $n3->tabuada();

foreach ($lista_tabuada as $frase){
    echo $frase . "<br>";
}

echo '<hr>';

echo $n4->get_numero() ."<br>";
echo $n4->par_impar() . "<br>";
echo $n4->raiz_quadrada() ."<br>";
$lista_tabuada = $n4->tabuada();

foreach ($lista_tabuada as $frase){
    echo $frase . "<br>";
}