<?php
$nextWeek = time() + (7 * 25 * 60 * 60);
echo 'Now:  '. date('d-m-Y') ."<br>";
echo 'Next Week:    '. date('d-m-Y') ."<br>";
echo 'Next Week:    '. date('d-m-Y', $nextWeek) ."<br>";
echo 'Next: '. date('d-m-Y', strtotime('+1 week')) ."<br>";
    // Now: 06/10/2023 Data Atual
    // Next Week: 04-10-2023 à uma semana após a data atual
    // Next Week: 004-10-2023 à uma semana após a data atual utilizando strtotime
    ?>