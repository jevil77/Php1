<h1>Excercice 7<h1>


<?php



function categorieEnfant($age) {
    if ($age < 6 ) {
        return "Hors catégorie";
    } elseif ($age >= 6 && $age <= 7) {
        return "Poussin";
    } elseif ($age >= 8 && $age <= 9) {
        return "Pupille";
    } elseif ($age >= 10 && $age <= 11) {
        return "Minime";
    } else  { 
        return "Cadet";
    }

}

$age = 5;
echo "L'enfant de $age ans est dans la catégorie : " . categorieEnfant($age);
?>
