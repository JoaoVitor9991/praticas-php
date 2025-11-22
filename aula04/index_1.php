<?php


// ACCESS MODIFIERS

/* ja vimos que as classes podem ter propriedades variaveis da classe
e metodos funcoes da classe

as PROPRIEDADES e os METODOS podem ter niveis de acessos distintos
que permitem controlar a que nivel podemos ter acesso a eles ou nao.

public - a propriedade ou metodo pode ser acessada a partir de qualquer lado.
E O ACCES MODIFIER padrao.

PROTECTED - a propriedade ou método pode ser acedida dentro da classe e
dentro de classes deviradas dela (veremos mais a frente o que sao classes derivadas).

PRIVATE - a propriedade ou metodo so pode ser acedido dentro da classe.

*/

class Homem
{
    public $nome;
    protected $apelido;
    private $cor_do_cabelo;
}

//vamos fazer a instanciao de homem = criar um objeto a partir da classe

$h = new Homem();

// Agora, se tentarmos o acesso a cada uma das propriedades

$h->nome = "Joao";    //OK
$h->apelido = "Ribeiro"; //ERRO
$h->$cor_do_cabelo = "Preto"; //ERRO