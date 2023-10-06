<?php 
    $data = new DateTime('22-01-1990');
    $data->setTime(9, 15, 44);
    echo $data->format('d-m-Y H:i:s');
    // 22-01-1990 09:15:44
?>