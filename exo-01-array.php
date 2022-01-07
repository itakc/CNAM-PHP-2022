<?php

/*

Créer un tableau contenant 5 cartes de 32 cartes à jouer
Exemple de nom de cartes : 'as de pique', '3 carreau, 'valet de treffle'8 coeur', 
Tirez un nombe au hasard entre 1 et 5 inclus en utilisant la focntion random _int().
A l'aide de ce nombre, retirez la enième carte du jeu
Affichez le nom de la carte qui à été retirée.
*/
require __DIR__. '/vendor/autoload.php';

$cartes = [
    'as pique',
    'as carreau',
    'as coeur',
    'as treffle',
    'roi coeur'
];
dump($cartes);

$tirerCarte = array_splice($cartes,0, 3);
dump($tirerCarte);

$eniemeCarte = array_pop($tirerCarte);

echo "la carte {$eniemeCarte} a été retiré <br>\n";

dump($cartes);

$cartes = random_int(1,3,);



