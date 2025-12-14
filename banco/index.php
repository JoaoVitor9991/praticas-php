<?php

require_once 'banco.php';

$amatsu = new Conta("Amatsu");
$amatsu->depositar(100);
echo $amatsu->sacar(12000);
echo "<br>";
echo $amatsu->ver_saldo();
