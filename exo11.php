<h1>Exercice 11<h1>


<?php

$marques = [ "Peugeot", "Renault", "BMW", "Mercedes"];
$nbMarques = count ($marques);



for($i = 0; $i < $nbMarques; $i++) {
    echo $marques [$i]. "<br>";
}

$i = 0;
while($i < $nbMarques) {
    echo $marques [$i]. "<br>";
    $i++;
}

foreach($marques as $marque) {
    echo $marque."<br>";
}


$nbMarques = count($marques);


echo "Le nombre de marques est de $nbMarques";


