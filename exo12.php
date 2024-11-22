<h1>Exercice 12<h1>


<?php






function bonjour($prenom, $langue) {
    switch ($langue) {
        case 'FRA':
            return "Salut $prenom <br>";
        case 'ENG':
            return "Hello $prenom <br>";
        case 'ESP':
            return "Hola $prenom <br>";
        default:
            return "Bonjour $prenom";
    }
}

$personnes = [
    'Mickaël' => 'FRA',
    'Virgile' => 'ESP',
    'Marie-Claire' => 'ENG'
];

ksort($personnes);

foreach ($personnes as $prenom => $langue) {
    echo bonjour($prenom, $langue) . "<br>";
}

