<?php

/*
Afficher tous les éléments du tableau $fruits avec une boucle foreach.
Afficher le message "première itération" lors de la première itération et le message "dernière itération" 
lors de la dernière itération.
Pour déterminer s'il s'agit de la dernière itération, vous devez utiliser la fonction count().
*/

$ifruits = ['ananas', 'banane', 'cerise', ];
$dernier = count ($ifruits)-1;
    //calcul le nombre d'éléments dans mon tableau
foreach ($ifruits as $index => $ifruit) {

    //echo $index . " ". $ifruit . "<br>";
    
    if ($index == 0) {
        echo "premier itération ".$ifruit." <br>";
    }elseif ($index == $dernier) {
        echo "derniere itération " .$ifruit." <br>";
    
    }else {
        echo $ifruit ."<br>";
    }

}