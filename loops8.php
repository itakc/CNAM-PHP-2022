<?php
require __DIR__.'/vendor/autoload.php';
/*
Créez toutes les cartes de l'as au roi dans les quatre couleurs en utilisant une boucle foreach 
qui parcours un tableau contenant les quatre couleurs et une boucle for qui est imbriquée.
Une carte est représentée par un tableau à clé alphanumérique, comme ci-dessous avec l'as de cœur :
[
    'value': 1,
    'color: 'cœur',
]
Le résultat final doit être un tableau contenant les éléments suivants :
[
    [
        'value': 1,
        'color: 'cœur',
    ],
    [
        'value': 2,
        'color: 'cœur',
    ],
    [
        'value': 3,
        'color: 'cœur',
    ],
    ...
        [
        'value': 13,
        'color: 'cœur',
    ],
    ...
]
Ensuite, utilisez deux boucles foreach imbriquées pour afficher tous les éléments du tableau.
*/
$colors = ['cœur', 'carreau', 'treffle', 'pique'];
// ont utilise un tableau vide

$cartes = [];
//Utilisation d'une boucle pour recuperer chaque couleur

foreach ($colors as $color) {
    //utilisation boucle foreach pour recuperer 13 cartes  par couleur
    for ($i=0;$i<13;$i++){
        $nbr=$i+1;
        $tab = [
            "value" =>$nbr,
            "color" =>$color,
        ];
$cartes[]= $tab;

    }
}
dump($cartes);
foreach ($cartes as $color){
    // boucle pour donner la valeur de la carte avec la couleur
    foreach ( $color as $main){
        echo "$main"; 
    }
    echo "<br>";
}
