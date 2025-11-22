<?php

/* ENTAO qual o a IMPORTANCIA DOS access modifier numa class?

Cenario um:
Imagina que quer que a definiçao do $nome nao possa ser direta.
Quer que exista uma especie de validaçao antes que o objetos criados a partir da classe possam aceitar o nome que vc quer definir . */

class Homem 
{
    private $nome;

    //Este metodo publico por padrao vai receber o parametro $n
    //E vai avaliar se o nome pode ser definido de acordo com as regras.
    //Neste caso, o nome nao pode ser nenhum daqueles que existe no array
    function set_nome($n)
    {

        $nomes_proibidos = [
            'joao', 'carlos', 'miguel'
        ];

        // verifica se $n pertence aos nomes proibidos
        if (in_array($n, $nomes_proibidos)){
            return;
        }

        // se nao pertence, define $nome com o valor de $n
        $this->nome = $n;
    }


    //para ir buscar o valor do nome...
    function get_nome()
    {
        return $this->nome;
    }
}


$a = new Homem();

$a->set_nome('joao');
echo 'O nome e: ' . $a->get_nome(); //vazio
echo '<br>';

$a->set_nome('Antonio');
echo 'O nome e: ' . $a->get_nome(); //antonio
echo '<br>';