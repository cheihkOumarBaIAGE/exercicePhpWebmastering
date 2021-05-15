<?php
/*Exercice : Générer trois nombres entiers puis les afficher dans l'ordre
croissant et dans l’ordre décroissant */
$t=rand(-300,3000);
$s=rand(-300,3000);
$v=rand(-300,3000);
if ($t>$s && $s>$v) {
    echo"Dans l ordre croissant on n aura {$t}, {$s}, {$v}";
    echo"Dans l ordre decroissant on n aura {$v}, {$s}, {$t}";
}elseif ($t>$v && $v>$s) {
    echo"Dans l ordre croissant on n aura {$t}, {$v}, {$s}";
    echo"Dans l ordre decroissant on n aura {$s}, {$v}, {$t}";
}elseif ($s>$t && $t>$v) {
    echo"Dans l ordre croissant on n aura {$s}, {$t}, {$v}";
    echo"Dans l ordre decroissant on n aura {$v}, {$t}, {$s}";
}elseif ($s>$v && $v>$t) {
    echo"Dans l ordre croissant on n aura {$s}, {$v}, {$t}";
    echo"Dans l ordre decroissant on n aura {$t}, {$v}, {$s}";
}elseif ($v>$t && $t>$s) {
    echo"Dans l ordre croissant on n aura {$v}, {$t}, {$s}";
    echo"Dans l ordre decroissant on n aura {$s}, {$t}, {$v}";
}else {
    echo"Dans l ordre croissant on n aura {$v}, {$s}, {$t}";
    echo"Dans l ordre decroissant on n aura {$t}, {$s}, {$v}";
}
?>