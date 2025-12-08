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
        if ($this->numero % 2 == 0){
            return "Este numero eh par";
        } else {
           return "Este numero eh impar!";
        }
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

$cinco = new Numero(5);
echo $cinco->get_numero();
echo "<br>";
echo $cinco->par_impar();
echo "<br>";
echo $cinco->raiz_quadrada();
echo "<br>";
echo "<br>";
$lista_tabuada = $cinco->tabuada();

foreach ($lista_tabuada as $frase){
    echo $frase . "<br>";
}