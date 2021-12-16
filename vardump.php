<?php

require __DIR__.'/vendor/autoload.php';

//var_dump()sert à inspecter une valeur
//var_dump()ne doit jamais servir à afficher
//des valeurs à l'utilisateur final

//operateur d'égalités
var_dump(1 == '1');
echo '<br>';
var_dump(0 == '1');
echo '<br>';

$text = 'foo bar baz';
dump($text);

$number1 = 123;
dump($number1);

$number2 = 3.14;
dump($number2);

$number3 = 123;
dump($number3);

$number3 = 'COMMENT TELEPHONE MAISON = ET';
dump($number3);





