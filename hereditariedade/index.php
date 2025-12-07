<?php 

class Veiculo
{
    public $tipo;

    public function ligar()
    {

    }

    public function desligar()
    {

    }
}

class Automovel extends Veiculo
{
    public $portas;
    public $marca;
    public $ano;
}

class Aviao extends Veiculo
{
    public $altitume_maxima;
    public $autonomia;
    public $construtora;
    public $ano_de_fabrica;
}