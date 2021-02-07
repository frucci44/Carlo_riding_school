<h1>Medve</h1>

<?php
    for ($i = 0; $i < count($oktatasiModok); $i++){
        $item = $oktatasiModok[$i];
        echo($item->megnevezes." - ".$item->idotartam_perc." perc<br>");
    }
?>