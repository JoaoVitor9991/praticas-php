<?php

class Produto {
    private $nome;
    private $preco;

    public function __construct($nome, $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function get_nome()
    {
        return $this->nome;
    }

    public function get_preco()
    {
        return $this->preco;
    }
}