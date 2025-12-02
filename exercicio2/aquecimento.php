<?php

class Pessoa 
{
    private  $dinheiro = 0;
    public $nome;
    private static $populacao = 0;
    

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

    public static function get_total_pessoas()
    {
        return self::$populacao;
    }
}


$amatsu = new Pessoa("Amatsu");
echo "Nome: ". $amatsu->nome;
echo "<br>";

$amatsuki = new Pessoa("Amatsuki");
echo "Nome: ". $amatsuki->nome;
echo "<br>";
echo Pessoa::get_total_pessoas();