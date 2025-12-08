<?php

class Numero {
    private $numero;

    public function __construct($numero_que_chegou)
    {
        $this->numero = $numero_que_chegou;
    }

    public function get_numero()
    {
        return $this->numero;
    }

    public function par_impar()
    {
        return $this->numero % 2 == 0 ? 'par' : 'impar';
    }

    public function tabuada()
    {
        $minha_lista = [];

        for($i = 1; $i <= 10; $i++) {
          $resultado =  $this->numero * $i;
          $frase = "{$this->numero} x {$i} = {$resultado}";
          $minha_lista[] = $frase;
          
        }
        return $minha_lista;
    }

    public function raiz_quadrada()
    {
        return sqrt($this->numero);
    }
}

