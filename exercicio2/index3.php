<?php



class Celular {

    private $porcentagem;

    public static $quantidade_vendida = 0;

    public function __construct($carga_inicial)

    {

        self::$quantidade_vendida +=1;

        $this->porcentagem = $carga_inicial;

    }

    public function assistir_video(){

        $this->porcentagem -= 20;

        return "Assistiu vídeo. Bateria {$this->porcentagem}";

    }

    public function carregar($qtd){

        $this->porcentagem += $qtd;

        return "Carregou {$qtd}. Total agora é de {$this->porcentagem}";

    }

    public function ver_cor_icone(){

        if ($this->porcentagem > 20)

            return "Verde";

        else

            return "Vermelho";
    }

    public function get_bateria(){

        return $this->porcentagem;

    }

}



$a = new Celular(100);
echo $a->assistir_video();
echo $a->assistir_video();
echo $a->carregar(10);
echo $a->ver_cor_icone();
echo $a->get_bateria();

echo "<br>";
echo "<br>";


$b = new Celular(5);
echo $b->ver_cor_icone();
$c = new Celular(100);
echo Celular::$quantidade_vendida;