<?php

//COMO ESCREVER UMA CLASSE E INSTANCIAR UM OBJETO

/*
As classes podem ter PROPRIEDADES E METODOS

PROPIREDADS SAO VARIAVEIS da classe
METODOS SAO FUNÇOES DA CLASSE.

A palavra CHAVE $this refere-se ao objeto atual e SO ESTA DISPONIVEL DENTRO DOS METODOS (FUNÇOES DA CLASSE) */ 

class Fruto
{
    public $nome;
    public $cor;
    public $peso;

    public function apresentar_fruto()
    {
        return "O meu nome e {$this->nome}, a minha cor e {$this->cor} e tenho {$this->peso} gramas";
    }
}

$laranja = new Fruto();
$laranja->nome = 'Laranja';
$laranja->cor = 'laranja';
$laranja->peso = '125';

$bananas = new Fruto();
$bananas->nome = 'bananas';
$bananas->cor = 'Amarela';
$bananas->peso = '100';

echo $laranja->apresentar_fruto();
echo '<br>';
echo $bananas->apresentar_fruto();