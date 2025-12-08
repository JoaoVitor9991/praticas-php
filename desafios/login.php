<?php

class Usuario {
    private $nome;
    private $email;
    private $senha;

    public function __construct($nome_que_chegou, $email_que_chegou, $senha_que_chegou)
    {
        $this->nome = $nome_que_chegou; 
        $this->email = $email_que_chegou;
        $this->senha = $senha_que_chegou;
    }

    public function logar($email_digitado, $senha_digitado)
    {
        if ($email_digitado == $this->email and $senha_digitado == $this->senha){
        return "Login realizado com sucesso!";
        
        } else {
            return "Acesso inválido!";
        }
    }

}

$amatsu = new Usuario("Amatsu", "amatsu@gmail.com", "12345");
echo $amatsu->logar("amatsu@gmail.com", "12345");

