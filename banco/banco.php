<?php

class Conta {
    private $titular;
    private $saldo = 0;

    public function __construct($titular_que_chegou)
    {
        $this->titular = $titular_que_chegou;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }

    public function sacar($valor)
    {
        if($this->saldo >= $valor) {
            return $this->saldo -= $valor;
        } else {
            return "Saldo insuficiente. Ta duro, deita parça";
        }
    }

    public function ver_saldo()
    {
        return "O saldo é de $this->saldo";
    }
}