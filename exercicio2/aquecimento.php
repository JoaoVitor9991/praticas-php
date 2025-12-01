<?php

class Pessoa 
{
    private  $dinheiro = 0;
    public $nome;
    public static $populacao = 0;

    public function trabalhar()
    {
        $this->dinheiro +=60;
        return "Trabalhei! {$this->dinheiro}";
    }

    public function __construct($nome_que_chegou)
    {
       $this->nome = $nome_que_chegou;
       self::$populacao += 1;
    }
}

$amatsu = new Pessoa("Amatsu");
echo $amatsu->trabalhar();
echo "<br>";
echo $amatsu->trabalhar();

