<?php

class Tenis 
{
    public  $marca;
    public  $tamanho;
}

$a = new Tenis();
$a->marca = "Nike";
$a->tamanho = "45";
echo "A marca do tenis e {$a->marca} e o tamanho e {$a->tamanho}";
echo "<br>";

$b = new Tenis();
$b->marca = "Adidas";
$b->tamanho = "39";
echo "A marca do tenis e {$b->marca} e o tamanho e {$b->tamanho}";