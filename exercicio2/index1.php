<?php

class Conta
{
    private $saldo;

    public function __construct($saldo_inicial)
    {
       $this->saldo = $saldo_inicial;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }

    public function ver_saldo()
    {
        return "O saldo e de: {$this->saldo}";
    }
}

$a = new Conta(100);
$a->depositar(50);
echo $a->ver_saldo();

    