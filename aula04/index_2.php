<?php 

// ACCESS MPODIFIERS

class Mulher
{
    public $nome;
    public $apelido;
    public $cor_de_cabelo;

    function metodo_1()
    {
        echo 'Metodo 1';
    }

    protected function metodo_2()
    {
        echo 'Metodo 2';
    }

    private function metodo_3()
    {
        echo 'Metodo 3';
    }

}

$m = new Mulher();

$m->metodo_1(); //OK
$m->metodo_2(); //ERRO
$m->metodo_3();  //ERRO