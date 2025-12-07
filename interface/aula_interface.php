<?php

interface Animal {
    public function vocalizar($vezes);
    public function identificar();
    public function executar_movimento($direcao);
}

class Cao implements Animal {
    public function vocalizar($vezes)
    {

    }

    public function identificar(){

    }

    public function executar_movimento($direcao)
    {

    }
}

$cao = new Cao();
$cao->vocalizar(3);
$cao->identificar();
$cao->executar_movimento("para cima");