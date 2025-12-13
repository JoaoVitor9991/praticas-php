<?php

require_once('humano.php');

$entidade = new Humano();
$dados = [
    ['m', 'João'], 
    ['f', 'Maria'],
    ['m', 'Pedro'],
    ['x', 'Alien'],
    ['f', 'Ana'],
    ['?', 'Predador']
]; 
foreach ($dados as $pessoa){
    $entidade->definir($pessoa[0], $pessoa[1]);
}

$masculinos = $entidade->get_masculinos();
$femininos = $entidade->get_femininos();
$desconhecidos = $entidade->get_desconhecidos();
?>
<h1>Masculinos</h1>
<ul>
    <?php foreach($masculinos as $nome) { echo "<li>$nome</li>"; } ?>
</ul>
<hr>

<h1>Femininos</h1>
<ul>
    <?php foreach($femininos as $nome) { echo "<li>$nome</li>"; } ?>
</ul>
<hr>

<h1>Desconhecidos</h1>
<ul>
    <?php foreach($desconhecidos as $nome) { echo "<li>$nome</li>"; } ?>
</ul>