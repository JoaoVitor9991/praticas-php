<?php

class Personagem{
    private $nome;
    private $vida;
    private $ataque;


    public function __construct($nome_que_chegou, $vida_que_chegou, $ataque_que_chegou)
    {
        $this->nome = $nome_que_chegou;
        $this->vida = $vida_que_chegou;
        $this->ataque = $ataque_que_chegou;
    }

    public function receber_dano($forca_do_inimigo)
    {
        $this->vida -= $forca_do_inimigo;
        return ("Ai! {$this->nome} tomou {$forca_do_inimigo} de dano e ficou fodido! {$this->vida} de vida. Brutalmente morto.");
    }

    public function atacar($alvo)
    {
        return $alvo->receber_dano($this->ataque);
    }
}

$amatsu = new Personagem("Amatsu", 100, 8000);
$orc = new Personagem("Orc", 120, 5);
echo $amatsu->atacar($orc);