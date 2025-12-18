<?php

abstract class  Veiculos 
{
    protected $tipo;
    protected  $marca;
    protected  $ano;

    public function __construct($tipo_chegou, $marca_chegou, $ano_chegou)
    {
        $this->tipo = $tipo_chegou;
        $this->marca = $marca_chegou;
        $this->ano = $ano_chegou;
    }

    public function get_tipo()
    {
        return $this->tipo;
    }

}

class Automovel extends Veiculos
{
    public function apresentar()
    {
        return "Este objeto guarda os dados de um Automóvel da marca: " . $this->marca . " e do ano:" . $this->ano;
    }
}

class Aviao extends Veiculos
{
    public function apresentar()
    {
        return "Este objeto guarda os dados de um Avião da marca: " . $this->marca . " e do ano:" . $this->ano;
    }
}

class Barco extends Veiculos
{
    public function apresentar()
    {
        return "Este objeto guarda os dados de um Barco da marca: " . $this->marca . " e do ano:" . $this->ano;
    }
}
