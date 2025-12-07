<?php

// Classes Abstratas 

/*
Um outro conceito muito importante na Programçao POO
eh o conceito de classes abstratas.

Uma classe abstrata, com metodos abstratos, implica que a classe
tenha metodos que estao declarados, mas cuja funcionalidade vai ter que ser 
implementada nas classes derivadas

*/

abstract class Pessoa
{
    abstract public function identificar();
    abstract public function falar();
    abstract public function saltar();
}

//Como pode ver, os metodos estao declarados, mas nao tem implementaçao.
//AS Classes derivadas vao ter que definir essa implementaçao.

class Cliente1 extends Pessoa {
    // public function identificar(){

    // }
    // public function falar(){

    // }
    // public function saltar() {

    // }

    
}