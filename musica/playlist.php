<?php

class Playlist 
{
    private $musica_playlist = [];

    public function adicionar_musica($adiciona_musica)
    {
        $this->musica_playlist[] = $adiciona_musica;
    }

    public function tempo_total()
    {
        $total = 0;

        foreach($this->musica_playlist as $musica){
            $duracao = $musica->get_duracao();

            $total = $total + $duracao;
        }

        return $total;
    }
}