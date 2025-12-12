<?php

class Humano {
    
    private $masculinos = [];
    private $femininos = [];
    private $desconhecidos = [];

    public function definir($sexo, $nome)
    {
        if ($sexo == 'M' or $sexo == 'm'){
            $this->masculinos[] = $nome;
        } elseif ($sexo == 'F' or $sexo == 'f'){
             $this->femininos[] = $nome;
        } else {
            $this->desconhecidos[] = $nome;
        }
        
    }

    public function get_masculinos() {
        return $this->masculinos;
    }

     public function get_femininos() {
        return $this->femininos;
    }

     public function get_desconhecidos() {
        return $this->desconhecidos;
    }

}


