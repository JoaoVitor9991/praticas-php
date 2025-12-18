<?php

/* 
Métodos estáticos são métodos de uma classe que podem ser
evocados diretamente sem que seja necessário criar um 
objeto a partir dessa classe.
*/

class Matematica 
{
    public static function adicionar($a, $b)
    {
        return $a + $b;
    }
}

echo Matematica::adicionar(20,30);