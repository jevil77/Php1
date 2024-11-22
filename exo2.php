<h1>Excercice 2<h1>

<p>A partir de la phrase de l'exercice 1, écrire l'instruction permettant de compter le nombre de mots contenus dans celle-ci.</p>


<?php



$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";



// Compter le nombre de mots
$nbMots = str_word_count($chaineDeCaracteres);
echo "La phrase « Notre formation DL commence aujourd'hui » contient $nbMots mots.<br>";
echo "La phrase « Notre formation DL commence aujourd'hui » contient ".str_word_count($chaineDeCaracteres)." mots.<br>";