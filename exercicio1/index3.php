<?php

class Tenis 
{
    public  $marca;
    public  $tamanho;

    public function exibir_ficha()
    {
        return "A marca do tenis e {$this->marca} e o tamanho e {$this->tamanho}";
    }

    public function __construct($marca, $tamanho)
    {   
        $this->marca = $marca;
        $this->tamanho = $tamanho;
    }
}

$a = new Tenis("Nike", "42");
echo $a->exibir_ficha();
echo "<br>";

$b = new Tenis("Adidas", "39");
echo $b->exibir_ficha();
