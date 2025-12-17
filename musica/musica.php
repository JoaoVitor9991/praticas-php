<?php

class Musica {
    private $titulo;
    private $duracao;

    public function __construct($titulo_chegou, $duracao_chegou)
    {
        $this->titulo = $titulo_chegou;
        $this->duracao = $duracao_chegou;
    }

    public function get_duracao()
    {
        return $this->duracao;
    }

    public function get_musica()
    {
        return $this->titulo;
    }
}