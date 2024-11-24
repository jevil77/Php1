<h1>Exercice 10<h1>


<?php



 
// Montant à payer et montant versé
$montantPaye = 152;  
$montantVerse = 200;
 
// Calcul du reste
$reste = $montantVerse - $montantPaye;
 
echo "Montant à payer : " . $montantPaye . " €". "<br>";
echo "Montant versé : " . $montantVerse . " €". "<br>";
echo "Reste à payer : " . $reste . " €". "<br>";
 
if ($reste < 0) {
    return false;
    echo "Le montant versé est insuffisant.". "<br>";
} else {
    echo "***************************************************". "<br>";
    echo "Rendue de monnaie :" . "<br>";
    }
 
// Calcul du rendu de monnaie en billets et pièces
$billets10 = floor($reste / 10);  
$reste -= $billets10 * 10;
 
$billets5 = floor($reste / 5);  
$reste -= $billets5 * 5;
 
$pieces2 = floor($reste / 2);  
$reste -= $pieces2 * 2;
 
$pieces1 = $reste;
 
if ($billets10 > 0) {
    echo $billets10 . " billets de 10 € - ";
}
if ($billets5 > 0) {
    echo $billets5 . " billet de 5 € - ";
}
if ($pieces2 > 0) {
    echo $pieces2 . " pièce de 2 € - ";
}
if ($pieces1 > 0) {
    echo $pieces1 . " pièce de 1 €";
}