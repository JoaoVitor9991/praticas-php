<?php

class Carrinho {
    private $itens = [];

    public function adicionar($produto_que_chegou){
        $this->itens[] = $produto_que_chegou;
    }

    public function calcular_total()
    {
        $total = 0;

        foreach($this->itens as $item) {
            $preco =  $item->get_preco();
            
            $total = $total + $preco;
        }

        return $total;
    }
}