<?php
function hitung($a1,$a2,$tombol){
    if($tombol == '+') $hasil = $a1 + $a2;
    else if ($tombol == '-') $hasil = $a1 - $a2;
    else if ($tombol == '*') $hasil = $a1 * $a2;
    else if ($tombol == '/') $hasil = $a1 / $a2;
    else $hasil = 0;
    return $hasil;

}

?>

<h1>Kalkulator</h1>
<form method="POST">
    <div class="inputan">
        <label for="">
            Angka1
            <input type="text" name="a1" id="a1" required>
        </label>
        <br><br>
        <label for="">
            angka2
            <input type="text" name="a2" id="a2" required>
        </label>
        <br><br>
        <input type="submit" name="tombol" value="+" id="">
        <input type="submit" name="tombol" value="-" id="">
        <input type="submit" name="tombol" value="*" id="">
        <input type="submit" name="tombol" value="/" id="">
    </div>
    <div class="hasil">
        <?php
        if(isset($_POST['tombol'])){
            $a1 = $_POST['a1'];
            $a2 = $_POST['a2'];
            $tombol = $_POST['tombol'];
            $hasil = hitung($a1,$a2,$tombol);
            echo "Hasilnya adalah =  $hasil";
        }
        ?>
    </div>

</form>