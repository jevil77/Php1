<h1>Exercice 5<h1>


<?php

function convertirFrancsEnEuros($montantEnFrancs) {

    $tauxDeConversion = 6.55957;

    $montantEnEuros = $montantEnFrancs / $tauxDeConversion;
    return round($montantEnEuros, 2); 
}


$valeurEnFrancs = 100; 

$valeurEnEuros = convertirFrancsEnEuros($valeurEnFrancs);

echo "Valeur en euros : " . $valeurEnEuros;