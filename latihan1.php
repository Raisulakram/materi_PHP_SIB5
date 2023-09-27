<?php

//echo 'hello world';

//latihan membuat variabel
$namasiswa = "Budi Santoso"; //string
$umur = 23;//integer
$beratbadan = 30.5;//float
$pekerjaan = "Mahasiswa";

$jari2 = 15;
define('PHI',3.14);
$luas  = PHI * $jari2*$jari2;
echo 'Nama mahasiswa : '.$namasiswa;
echo '<br>Umur : '.$umur;
echo '<br>Berat badan : '.$beratbadan;
echo '<br>Pekerjaan : '.$pekerjaan;


?>
<hr>
<br> Siswa : 1: <?= $namasiswa?>
<br> Umur :  <?= $umur?>
<br> Luas jari-jari :  <?= $luas?>

