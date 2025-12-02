<?php 

class Funcionario {
    private $nome;
    private $salario;

    public function __construct($nome_que_chegou, $salario_inicial)
    {
        $this->nome = $nome_que_chegou;
        $this->salario = $salario_inicial;
    }

    public function receber_aumento($valor_extra)
    {
        $this->salario += $valor_extra;
        return ("Aumento aprovado...");
    }

    public function ver_holerite()
    {
        return "Funcionario: {$this->nome} - Salario atual: R$:{$this->salario}";
    }
}

$f = new Funcionario("Amatsu", "4500");
echo $f->ver_holerite();
echo "<br>";
echo $f->receber_aumento(500);
echo "<br>";
echo $f->ver_holerite();

