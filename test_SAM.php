<?php

/*Fonction qui retourne la somme d'un tableau*/ 

$tab = [1, 2, 3, 4];
echo array_sum($tab). '<br />';

/* Fonction qui renvoie le maximum d'un tableau*/ 

echo(max(array(1, 2, 3, 4))). '<br />';

/* Fontion qui ajoute 3 à chaque élément d'un tableau*/

$tab = array_fill(1, 4, 3);
print_r($tab);

/* Fonction qui renvoie true si le texte en entrée est un palindrome*/ 
echo '<br />';
$mot = 'bob';
$inverse = strrev($mot);
if (($mot) === $inverse) {
    echo $mot . ' true ';
} else {
    echo $mot . ' false '. '<br />';
}

// Fonction qui renvoie true si les deux textes en entrée sont des anagrammes.

$mot1 = 'arbre'
$mot2 = 'barre'

// Il faut ici comparer le nombre de caractére des deux chaînes.

if (strncasecmp($mot1, $mot2, 5) !== 0);  {
    echo "$mot1 est égal à $mot2";
}

// Maintenant il faut comparer la correspondance entre les lettres.
?>