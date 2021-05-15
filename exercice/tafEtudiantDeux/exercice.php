<?php
/*Exercice : Générer deux nombres entiers puis les afficher dans l'ordre
croissant et dans l’ordre décroissant*/
$t=rand(-200,1000);
$s=rand(-200,1000);
if ($t>$s) {
    echo"Dans l ordre croissant on n aura {$t} et {$s} ";
    echo"Dans l ordre decroissant on n aura {$s} et {$t} ";
}else {
    echo"Dans l ordre croissant on n aura {$s} et {$t} ";
    echo"Dans l ordre decroissant on n aura {$t} et {$s} ";
}
?>