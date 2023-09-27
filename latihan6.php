<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form input penilaian</h1>
    <form method="POST">
        <label for="">Nama</label>
        <input type="text " name="nama" placeholder="masukan nama anda">
        <br><br>
        <label for="">Mata kuliah</label>
        <select name="matakuliah" id="">
            <option value="">--Pilihan mata kuliah--</option>
            <option value="html">HTML dan CSS</option>
            <option value="js">Javascript</option>
            <option value="ui">UI/UX</option>
            <option value="php">PHP</option>
        </select>
        <br><br>
        <label for="">Nilai</label>
        <input type="text" name="nilai" placeholder="masukan nilai">

        <button name="proses" type="submit">Simpan</button>
    </form>

<?php
$nama = $_POST['nama'];
$matakuliah = $_POST['matakuliah'];
$nilai = $_POST['nilai'];
$tombol = $_POST['proses'];

$ket = ($nilai >= 60) ? "lulus" : "gagal";
if ($nilai >=85&& $nilai <=100) $grade = "A";
else if($nilai >= 75 && $nilai <= 84) $grade = "B";
else if($nilai >= 60 && $nilai <= 74) $grade = "C";
else if($nilai >= 30 && $nilai <= 59) $grade = "D";
else if($nilai >= 0 && $nilai <= 29) $grade = "E";
else $grade = "";

switch($grade){
    case "A" : $predikat = "Mmemuaskan";break;
    case "B" : $predikat = "Bagus";break;
    case "C" : $predikat = "Cukup";break;
    case "D" : $predikat = "Kurang";break;
    case "E" : $predikat = "Buruk";break;
    default: $predikat ="";
}

if(isset($tombol)){
?>

<br> Nama Siswa : <?=$nama ?>
<br> Nilai : <?=$nilai ?>
<br> Mata kuliah : <?=$matakuliah ?>
<br> Keterangan : <?=$ket ?>
<br> Grade : <?=$grade ?>
<br> Predikat : <?=$predikat ?>
<?php } ?>
</body>
</html>