<?php
function salam(){
    echo '<br> selamat pagi teman-teman';
}
function sapa($kawan){
    echo '<br> selamat pagi' .$kawan;
}
function kabar($kawan='Budi'){
    echo '<br> hsi apa kabar' .$kawan;
}

salam();

$nama = 'deden';
sapa($nama);// ini pengambilan variabel baru
sapa('Raisul'); //pangil value dari parameter $kawan
kabar();
kabar('ahmad');
echo '<hr>';
//fungsi mengecek bilangan prima
function prima($bilangan){
    $prima = true;
    for($i=2; $i<$bilangan; $i++){
        if($bilangan % $i ==0){
            $prima = false;
            break;
        }
    }
    return $prima;
}
if(prima(8)){
    echo "Bilangan prima";
} else {
    echo "bukan bilangn prima";
}
?>