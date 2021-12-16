<?php

require __DIR__.'/vendor/autoload.php';

$isWateroff = (bool) random_int(0, 1);
$isGasoff = (bool) random_int(0, 1);

dump($isWateroff);
dump($isGasoff);

if ($isWateroff && $isGasoff) {
    echo 'ont peux partir en WE!<br>';
}
else {
    echo 'ont ne peux pas partir en WE<br>';

}
if ($isWateroff) {
    echo 'il faut couper l\'eau<br>';  
}
if ($isGasoff) {
    echo 'il faut couper le gaz<br>'; 

    }
