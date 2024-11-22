<h1>Excercice 6<h1>
<?php

$nbArticles = 5;
$prixHT = 9.99;
$totalHT = $nbArticles * $prixHT;
echo "Le total HT est de $totalHT <br>";

$tauxTVA = 0.20;

$totalTTC = $nbArticles * $prixHT + $nbArticles * $prixHT * $tauxTVA;

echo  $totalTTC;
