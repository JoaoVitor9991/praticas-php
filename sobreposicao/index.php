<?php

//Sobreposiçao de metodos herdados

/* 
O conceito de sobreposiçao eh uma traduçao simples de um outro conceito mais conhecido como override
na pratica significa que podemos ter uma classe 'mae' onde um determinado metodo eh 
definido e podemos alterar seu codigo dentro de uma classe 'filha'
*/

class Pessoa {
    public $nome;

    public function indentificacao()
    {
        echo "O nome eh {$this->nome} e este metodo eh da classe mae.";
    }
}

class Cliente extends Pessoa {
    public function indentificacao()
    {
        echo "O nome eh {$this->nome} e este metodo tem uma nova implementacao na classe FILHA";
    }
}

$cliente_1 = new Pessoa();
$cliente_1->nome = 'Joao';

$cliente_2 = new Cliente();
$cliente_2->nome = 'Lucas';

$cliente_1->indentificacao();
echo "<br>";
$cliente_2->indentificacao();
