<?php

require __DIR__. '/vendor/autoload.php';

$emptyArray = [];

$fruits = [
    'ananas',
    'banane',
    'cerise',
];

dump($fruits);

echo "fruits n°1, : {$fruits[0]}<br>\n";
echo "fruits n°2, : {$fruits[1]}<br>\n";
echo "fruits n°3, : {$fruits[2]}<br>\n";

// accès en écriture au fruits n°1 avec $fruits [0]
$fruits[0] ='abricots';

dump($fruits);

// accès en lecture au fruits n°1 avec $fruits [0]
echo "fruits n°1 : {$fruits[0]}<br>\n";
// la fonction qui permet de connaitre la taille d'un tableau
$size = count($fruits);

echo "il y a {$size} fruits<br>\n";

echo "il y a " .count($fruits)." fruits<br>\n";

$fruits[] ='datte';
$fruits[] ='fraise';

dump($fruits);

$size = count($fruits);
echo " il y a {$size} fruits<br>\n";

// enlever le premier élément
$fruitA = array_shift($fruits);

dump($fruitA);
dump($fruits);

// enlever le dernier élément
$fruitF = array_pop($fruits);

dump($fruitF);
dump($fruits);

// enlever un élément au milieu du tableau
// enlever a partir de l'index 1 seul élément
$fruitsremoved = array_splice($fruits, 1,1);

dump($fruits);
dump($fruits);

// enlever un élément
//warning la fonction unset ne réindex pas le tableau mais est beaucoup plus simple que array_slice

unset($fruits[0]);

dump($fruits);

//corcaténation de 2 tableaux
$vegetables = ['artichaut', 'betterave', 'carotte'];
$biglist = array_merge($fruits, $vegetables);

dump($biglist);

if (!in_array('ananas', $biglist)){
    echo "il y à des ananas dans la liste<br>\n";
}

if (!in_array('carottes', $biglist)){
    echo "il y à des carottes dans la liste<br>\n";
}


$data = [
    'nom' =>'lorem',
    'prenom' =>'toto',
    'age' =>'18',
    'email' =>'toto.lorem@example.com',
    'newsletter' =>'true',

];

dump ($data);
//accès en lecture
echo "email: {$data['email']}";

//accès en écriture
$data['age'] = 12;

//ajout d'un couple clé valeur
$data['spammer'] = true;

//suppresion d'un couple de clé valeur
unset($data['spammer']);

//
































