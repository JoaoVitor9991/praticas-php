<?php

trait movimentos
{
   public function andar()
   {

   } 
   
   public function saltar()
   {

   } 

   public function parar()
   {

   } 

}

trait movimento_de_voo
{

}

class Ser_vivo
{
    public $nome;
    public $especie;
    public $peso;
}


class ser_vivo
{
    use movimentos;
}

class Leao extends ser_vivo
{
    use movimentos;
}