<?php 

// COMO ESCREVER CLSSES E INSTANCIAR UM OBJETO  

// agora sim porra

/*
Vimos que uma classe ´´e uma classe para criar objetos
Os objetos, sao instancia de uma classe 
*/

//como criar uma classe?

class Fruto
{
    //propriedades
    public $nome;
}

$laranja = new Fruto();

//definir o valor da propriedade
$laranja->nome = "Laranja";

//criar um outro objeto do tipo Fruto
$bananas = new Fruto();
$bananas->nome = "Bananas";

//como vamos mostrar as propriedades de um objeto?
echo $laranja->nome;
echo '<br>';
echo $bananas->nome;