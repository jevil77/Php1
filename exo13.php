<h1>Exercice 13<h1>

<?php

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];

$moyenne = array_sum($notes) / count($notes);

echo "Les notes obtenues par l’élève sont : " . implode(" ", $notes) . "<br>";
echo "La moyenne générale est : " . number_format($moyenne, 2) . "<br>";
?>
