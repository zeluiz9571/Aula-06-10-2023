<?php

$text = "Numa toca no chão vivia um hobbit. Não uma toca desagradável, suja e úmida, cheia de restos de minhocas e com cheiro de lodo; tampouco uma toca seca, vazia e arenosa, sem nada em que sentar ou o que comer: era a toca de um hobbit, e isso quer dizer conforto.";

$result = strstr($text, "tampouco uma toca seca,"); //False é default - podemos omitir

echo $result;

?>