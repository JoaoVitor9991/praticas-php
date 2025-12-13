<?php
require_once('boletim.php');

$amatsu = new Aluno("Amatsu");
$amatsu->adicionar_nota(10);
$amatsu->adicionar_nota(0);
$amatsu->adicionar_nota(9);

echo "A média é: ". $amatsu->calcular_media();