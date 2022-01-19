<?php
/*
Créez toutes les cartes de l'as au roi de cœut en utilisant une boucle for.
Le résultat doit être un tableau contenant les éléments suivants : ['1 cœur', '2 cœur', '3 cœur',
 ..., '13 cœur']
Ensuite, utilisez une boucle foreach pour afficher tous les éléments du tableau.
*/
require __DIR__. '/vendor/autoload.php';

$cartes = [

];

for ($i=0;$i<13;$i++){

$nbr=$i+1;
$cartes[] = "$nbr coeur";

}

dump($cartes);
//créer variable nbrcartes qui va recuperer les valeurs du tableau cartes
$nbrcartes = $cartes;
//remplacement de la valeur "1" par "As" ou "11" par "valet" etc...
$nbrcartes = preg_replace('/^1 /', 'as ', $nbrcartes);
$nbrcartes = preg_replace('/^11 /', 'valet ', $nbrcartes);
$nbrcartes = preg_replace('/^12 /', 'dame ', $nbrcartes);
$nbrcartes = preg_replace('/^13 /', 'roi ', $nbrcartes);

//afficher tous les éléments du tableau avec la fonction Foreach
foreach ($nbrcartes as $objets){

    echo $objets."<br>";

}
