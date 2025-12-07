<?php

class Carrinho {
    private $valor_total = 0;
    private $quantidade_itens = 0;

    public function adicionar_item($preco_do_item)
    {
        $this->valor_total += $preco_do_item;
        $this->quantidade_itens +=1;

        return "Item de R$ {$preco_do_item} adicionado!";
    }

    public function finalizar_compra()
    {
        if ($this->valor_total > 200){
            return "frete gratis";
        } else {
            $total_com_frete = $this->valor_total +50;
            return "Subtotal: R$ {$this->valor_total}. Frete: R$50. Total a pagar: {$total_com_frete}";
        }
    }
}

$a = new Carrinho();
echo $a->adicionar_item(50);
echo "<br>";
echo $a->adicionar_item(100);
echo "<br>";
echo $a->finalizar_compra();
echo "<br>";
echo $a->adicionar_item(60);
echo "<br>";
echo $a->finalizar_compra();
