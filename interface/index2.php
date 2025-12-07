<?php

interface Pagamento{
    public function pagar($valor);
}

class Pix implements Pagamento{
    public function pagar($valor)
    {
        return "Pagamento de R$ {$valor} realizado via PIX instantâneo.";
    }
}

class Cartao implements Pagamento{
    public function pagar($valor)
    {
        return "Pagamento de R$ {$valor} realizado no cartão.";
    }
}

$p = new Pix();
echo $p->pagar(1000);

echo "<br>";

$c = new Cartao();
echo $c->pagar(2000);