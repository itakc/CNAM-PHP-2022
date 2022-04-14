<?php

/*
Creéz un tableau contenant 5 cartes d'un jeu de 32 cartes à jouer.
Exemple de nom de cartes : '1 pique', '3 carreau', '11 treffle', etc.
Rappel des valeurs de certaines cartes :
- as : 1
- valet : 11
- dame : 12
- roi : 13
Stockez la taille du tableau dans une variable en utilisant la fonction count().
Tirez un nombre au hasard, compris entre 1 et la taille du tableau inclus, en utilisant la fonction random_int().
Stockez ce nombre dans un tableau.
À l'aide de ce nombres, retirer une carte de la main.
Recommencez afin de retirer une deuxième carte au hasard.
Affichez le nombres tirés au hasard et le nom des cartes qui ont été retirées.
Comparez les valeurs numériques des cartes et affichez quelle carte a une valeur supérieur ou s'il y a égalité.
Attention, par convention la carte "as" (valeur 1) est la plus élevée.
*/

require __DIR__. '/vendor/autoload.php';

$cartes = [
    '1 pique',
    '3 carreau',
    '4 treffle',
    '3 carreau',
    '5 coeur'
];

$tailleTab = count($cartes);

$tirage1 = random_int(0, $tailleTab-1);
$tirage2 = random_int(0, $tailleTab-1);

$tirages = [];

array_push($tirages, $tirage1, $tirage2);

$carte1 = array_splice($cartes, $tirage1-1,1);
$carte2 = array_splice($cartes, $tirage2-1,1);

$carte1 = $carte1[0];
$carte2 = $carte2[0];

echo "Vous avez tiré la carte $carte1 en premier <br>";
echo "Vous avez tiré la carte $carte2 en second";

dump($carte1);
dump($carte2);

$valCarte1 = (int) $carte1[0];
$valCarte2 = (int) $carte2[0];

if($valCarte1 == $valCarte2)

{

    echo "la carte $carte1 et $carte2 sont équivalentes";

}

elseif($valCarte2 < $valCarte1 || $valCarte2 == 1)

{

    echo "La carte $carte1 est supérieur à la carte $carte2";

}

elseif($valCarte1 > $valCarte2 || $valCarte1 == 1){

    echo "La carte $carte1 est supérieur à la carte $carte2";

}

dump($valCarte1);
dump($valCarte2);
dump($tirages);
