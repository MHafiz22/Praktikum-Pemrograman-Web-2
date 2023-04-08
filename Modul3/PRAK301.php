<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 3 Soal 1</title>
</head>
<body>
    <form action="" method="POST">
        Jumlah Peserta : <input type="number" name="jumlah"></br>
        <input type="submit" name="submit" value="Cetak">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $jumlah = $_POST['jumlah'];
        $i = 1;
        while ($i <= $jumlah) {
            if ($i % 2 == 1) {
                echo "<h2><font color='red'>Peserta Ke-$i</font></br>";
            } else {
                echo "<h2><font color='green'>Peserta Ke-$i</font></br>";
            }
            $i++;
        }
    }
    ?>
</body>
</html>