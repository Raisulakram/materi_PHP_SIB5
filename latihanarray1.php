<?php
$ar_buah = ['pepaya','mangga','jambu'];
$ar_buah[] = 'naga';
$ar_buah[] = 'Durian';

$ar_buah[2] = 'nanas';
unset($ar_buah[3]);


echo '<br>cetak data arraymengunakan looping foreach';
foreach ($ar_buah as $id => $buah ){
    echo '<br> key array buah : ' .$id;
}

foreach($ar_buah as $buah){
    echo '<br> Data Buah : ' .$buah;
}
foreach($ar_buah as $id => $buah){
    echo '<br> Buah dengan ID : ' .$id. 'adalah buah' .$buah;
}
?>