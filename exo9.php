<h1>Exercice 9<h1>



<?php

$age = 25;
$sexe = 'F';

function imposable($age, $sexe) {


    if ($sexe == 'F' &&  $age >= 18 && $age <= 35) {
        return "Imposable";

    
    } elseif ($sexe == 'H' && $age < 20) {
        return "Imposable";
    
    } else {
        return "Non imposable";
    }

}




echo "La personne est " .imposable($age, $sexe); 






