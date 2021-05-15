<?php
/*Exercice : soit l'équation ax+b=0,générer la valeur de a et de b puis donner
les solution de l'équation ci dessus*/
$a=rand(-100,10000);
$b=rand(-100,10000);
$x=$b/$a;
if ($a!=0) {
    echo"l equation avec a={$a} et b={$b} donnera x est egal à : {$x}";
}else {
    echo"l equation n'admet pas de solution";
}
?>