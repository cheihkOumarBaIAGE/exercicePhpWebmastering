<?php
/*Exercice : soit l'équation ax 2+bx+c=0,générer la valeur de a , de b et de c
puis donner les solution de l'équation ci dessus.*/
$a=rand(-200,20000);
$b=rand(-200,20000);
$c=rand(-200,20000);
$d=(4*$a*$c)-$b**2;
$sqrtD=sqrt($d);
$x=(-$sqrtD-$b)/(2*$a);
$y=($sqrtD-$b)/(2*$a);
$z=$b/(2*$a);
if ($d>0) {
    echo"L equation a pour valeurs {$x}, {$y}";
}elseif ($d==0) {
    echo"L equation a pour valeur {$z}";
}else {
    echo"L equation n admet pas de valeur";
}
?>