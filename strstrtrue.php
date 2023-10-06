<?php
findZero('01234'); //Found a zero

function findZero($numberString){
    if (strstr($numberString, '0', true)) {
        echo 'Encontrado o zero';
    } else {
        echo "Não encontrado o zero";
    }
}
?>