<?php

trait funcoes_matematicas
{
    public function adicionar($a, $b)
    {
        return $a + $b;
    }

    public function subtrair($a, $b)
    {
        return $a - $b;
    }

     public function multiplicar($a, $b)
    {
        return $a * $b;
    }

     public function dividir($a, $b)
    {
        return $a / $b;
    }
}

class Matematica
{
    use funcoes_matematicas;
}

$calculador = new Matematica();
echo $calculador->adicionar(20, 30);
echo "<br>";
echo $calculador->subtrair(20, 30);
echo "<br>";
echo $calculador->multiplicar(20, 30);
echo "<br>";
echo $calculador->dividir(20, 30);