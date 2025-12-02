<?php

interface Animal{
     public function emitir_som();
}

class Cachorro implements Animal{
    public function emitir_som()
    {
        return "Auuuuuuuuuuuuuuuu!";
    }
}

class Gato implements Animal{
    public function emitir_som()
    {
        return "Miau";
    }
}

$c = new Cachorro();
$g = new Gato();

echo  $c->emitir_som();
echo "<br>";
echo  $g->emitir_som();
    