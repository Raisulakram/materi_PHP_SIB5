<?php
function tambah($a,$b){
    $c = $a + $b;
    return $c;
}

$x = 20;
$y = 24;
echo 'hasil dari 50+30 = ' .tambah(50,30);
echo '<br> hasil dari x + y =' .tambah($x,$y)
?>