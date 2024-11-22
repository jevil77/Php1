<h1>Exercice 4<h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome</p>





<?php

$str = "anna";

$string = "$str";

echo "$string";

$reversedString = strrev($string);

echo "$reversedString";




$testString = "anna";


function isPalindrome($string) {


    $reversedString1 = strrev($string);

    return $string === $reversedString1;



}




if (isPalindrome($testString)) {

      echo "<br><br>anna est un palindrome";
    
    } else {

      echo "<br><br>anna n'est pas un palindrome";
    }


