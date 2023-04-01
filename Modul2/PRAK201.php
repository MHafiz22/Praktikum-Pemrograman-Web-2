<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2 Soal 1</title>
</head>
<body>
    <?php
    // Pengurutan nama dari urutan abjad terkecil ke terbesar
    function insertionSort($array)
    {
        for ($i = 0; $i < count($array); $i++) {
            $val = $array[$i];
            $j = $i - 1;
            while ($j >= 0 && $array[$j] > $val) {
                $array[$j + 1] = $array[$j];
                $j--;
            }
            $array[$j + 1] = $val;
        }
        return $array;
    }
    ?>
    <form action="" method="post">
        <!-- Membuat input nama 1, nama 2 dan nama 3 -->
        Nama: 1 <input type="text" name="inputnama1"><br>
        Nama: 2 <input type="text" name="inputnama2"><br>
        Nama: 3 <input type="text" name="inputnama3"><br>
        <!-- Tombol submit -->
        <input type="submit" name="submit" value="Urutkan">
    </form><br>
    <?php
    if (isset($_POST['submit'])) {
        $hasil = array();
        $hasil[] = $_POST['inputnama1'];
        $hasil[] = $_POST['inputnama2'];
        $hasil[] = $_POST['inputnama3'];
        foreach (insertionSort($hasil) as $value) {
            echo $value;
            echo "<br>";
        }
    }
    ?>
</body>
</html>