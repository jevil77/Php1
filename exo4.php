<h1>Exercice 4<h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome</p>





<?php

$str = "a b b a";











function isPalindrome($string) {


    $cleanedString = strtolower(str_replace(" ",'',$string));

 

    $reversedString1 = strrev($cleanedString);

    if( $cleanedString === $reversedString1){

        return "est un palindrome";
    }else{

        return "pas un palindrome";
    }



}

echo isPalindrome($str);






