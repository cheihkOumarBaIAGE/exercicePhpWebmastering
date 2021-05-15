<?php
/*Exercice II: Générer deux nombres puis
faire leur permutation.
On affichera les deux nombres
avant et après permutations.
*/
$o=rand(-1000,1000);
$p=rand(-1000,1000);
$z=0;
echo"la permutation de {$o} et {$p}\n =";
$z=$o;
$o=$p;
$p=$z;
echo" {$o} and {$p}";
?>