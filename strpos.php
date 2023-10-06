<?php

$text = "Numa toca no chão vivia um hobbit. Não uma toca desagradável, suja e úmida, cheia de restos de minhocas e com cheiro de lodo; tampouco uma toca seca, vazia e arenosa, sem nada em que sentar ou o que comer: era a toca de um hobbit, e isso quer dizer conforto.";

$length = strpos($text, "com cheiro de lodo"); //Posição onde inicia a string "com cheiro de lodo" = 30

$result = substr($text, 0, $length); //Posição inicial = 0, comprimento = 20

echo $result;

?>