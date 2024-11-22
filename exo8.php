<h1>Exercice 8<h1>

<?php





function TableMultiplication($nombre) {

    echo "Table de multiplication de $nombre:<br>";

    for ($i = 1; $i <= 10; $i++) {

        echo "$nombre x $i = " . ($nombre * $i) . "<br>";
    }
}


for ($j = 1; $j <= 10; $j++) {


    TableMultiplication($j);
    echo "<br>";
    
}
?>
