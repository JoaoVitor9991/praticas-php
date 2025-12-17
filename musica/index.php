<?php 

require_once 'musica.php';
require_once 'playlist.php';

$musica1 = new Musica("Alone in a room", 190);
$musica2 = new Musica("Too late", 290);

$playlist = new Playlist();
$playlist->adicionar_musica($musica1);
$playlist->adicionar_musica($musica2);

echo "Música 1: " . $musica1->get_musica() . "<br>";
echo "Música 2: " . $musica2->get_musica() . "<br>";
echo "-----------------------------------------------<br>";

echo "Total de tempo da playlist: " . $playlist->tempo_total() . " Segundos.";


