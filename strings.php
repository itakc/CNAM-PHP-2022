<?php

// affectation d'une chaine de caractères
$text1 ='foo';

//concatenation d'une variable et d'une chaine de caractères
$text2 = $text1.'bar';

echo $text1. "<br>\n";
echo $text2. "<br>\n";

$temperature = 10.5;
$report = "la température est de $temperature °C";

// meme resultat avec une concaténation
$report = 'la température est de'.$temperature.' °C';

echo $report. "<br>\n";
// remplacement du point par une virgule
echo str_replace('.',',', $report."<br>\n");

echo $report."<br>\n";


