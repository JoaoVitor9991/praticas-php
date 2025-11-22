<?php

class Tenis 
{
    public  $marca;
    public  $tamanho;

    public function exibir_ficha()
    {
        return "A marca do tenis e {$this->marca} e o tamanho e {$this->tamanho}";
    }
}

$a = new Tenis();
$a->marca = "Nike";
$a->tamanho = "45";
echo $a->exibir_ficha();
echo "<br>";

$b = new Tenis();
$b->marca = "Adidas";
$b->tamanho = "39";
echo $b->exibir_ficha();
