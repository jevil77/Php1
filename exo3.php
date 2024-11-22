<h1>Excercice 3<h1>

<!-- <p>A partir de la phrase de l'exercice 1, écrire l'instruction permettant de remplacer le mot « aujourd'hui »
    par le mot « demain 1 ». Afficher l'ancienne et la nouvelle phrase. -->


<?php

$str = "Notre formation DL commence aujourd'hui<br>";





// Remplacer un mot
echo $str;

$str = str_replace( "aujourd'hui","demain", $str);

echo $str;


