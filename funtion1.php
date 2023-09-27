<?php
$str = 'Belajar php di kampus merdeka';
echo $str;

$str =strtoupper($str);
echo '<br>'.$str;

$str = strtolower($str);
echo '<br>' .$str;

$ar_buah = ['pepaya','mangga','pisang','jambu','apel'];
sort($ar_buah);
foreach($ar_buah as $buah){
    echo '<br>' .$buah;
}
echo '<hr>';
arsort($ar_buah);
foreach($ar_buah as $buah){
    echo '<br>' .$buah;
}
?>