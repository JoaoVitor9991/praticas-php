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

    public function sacar_valor($sacar)
    {
        if($sacar > $this->saldo)
            return "SALDO INSUFICIENTE SEU POBRE!";

        $this->saldo -= $sacar;
        return "Saque de {$sacar} realizado! Sobrou {$this->saldo}";

    }
}

$a = new Conta(1000);
//$a->sacar_valor(200);
echo $a->sacar_valor(200);
//echo $a->ver_saldo();

    