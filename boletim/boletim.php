<?php 

Class Aluno{
    private $nome;
    private $notas = [];

    public function __construct($nome_que_chegou)
    {
        $this->nome = $nome_que_chegou;
    }

    public function adicionar_nota($valor)
    {
        $this->notas[] = $valor;
    }

    public function calcular_media()
    {
        $soma = 0;

        foreach ($this->notas as $nota) {
            $soma = $soma + $nota;
        }

        $quantidade = count($this->notas);

        return $soma / $quantidade;
    }
}