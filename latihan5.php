<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Rumus bangun datar</h3>
    <form method="POST">
        <table>
            <tr>
                <td>sisi 1</td>
                <td>
                    <input type="text" name="sisi1" required>
                </td>
            </tr>
            <tr>
                <td>sisi 2</td>
                <td>
                    <input type="text" name="sisi2" required>
                </td>
            </tr>
            <tr>
                <td>
                <input type="submit" name="submit" value="Hitung">
                </td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $sisi1 = $_POST ['sisi1'];
        $sisi2 = $_POST ['sisi2'];

        $luaspersegi = $sisi1*$sisi2;
        echo 'Hasil perhitungan luas persegi';
        echo '<br> Diketahui : ';
        echo '<br> Sisi pertama :'.$sisi1;
        echo '<br> Sisi kedua :'.$sisi2;

        echo '<br> hasil perhitungan :' .$luaspersegi;
    }
    ?>

</body>
</html>