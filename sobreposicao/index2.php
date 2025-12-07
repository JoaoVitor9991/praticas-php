<?php

//Impedir HERANÇA DE CLASSE OU METODO

/*
Imagine que vai criar um bloco de codigo que vai ser usado por outro programador.
Vai querer qie a estrutura da tua classe
contenha mecanismos que impessam determinados tipos de açoes.
Por exemplo, pode querer que uma determinada classe nao possa ser herdada por outra. Ou simplesmente
um determiniado metodo dessa classe nao devera poder ser sobreposto (override) por outro dentro da classe 'filha'
*/

final class Classe_unica
{
    // esta classe nao vai poder ser herdada usando extends
}

class Nova extends Classe_unica
{
    //Fatal error: class Nova may not inherit from final class
}