<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2 Soal 3</title>
</head>
<body>
    <form action="" method="post">
        <!-- Menginput nilai -->
        Nilai: <input type="text" name="nilai"><br>
        <!-- Membuat input jenis suhu sebelum konversi -->
        Dari: <br>
        <input type="radio" name="suhuAwal" value="Celcius">Celcius<br>
        <input type="radio" name="suhuAwal" value="Fahreinheit">Fahrenheit<br>
        <input type="radio" name="suhuAwal" value="Rheamur">Rheamur<br>
        <input type="radio" name="suhuAwal" value="Kelvin">Kelvin<br>
        <!-- Membuat input jenis suhu sesudah konversi -->
        Ke: <br>
        <input type="radio" name="suhuKonversi" value="°C">Celcius<br>
        <input type="radio" name="suhuKonversi" value="°F">Fahrenheit<br>
        <input type="radio" name="suhuKonversi" value="°R">Rheamur<br>
        <input type="radio" name="suhuKonversi" value="°K">Kelvin<br>
        <!-- Tombol submit -->
        <input type="submit" name="konversi" value="Konversi">
    </form>
    <?php
    if(isset($_POST["konversi"])) {
        $nilai = $_POST["nilai"];
        $suhuAwal = $_POST["suhuAwal"];
        $suhuKonversi = $_POST["suhuKonversi"];
        $hasil;
        // Pengkondisian suhu awal celcius
        if($suhuAwal=="Celcius"){
            if($suhuKonversi=='°C'){
                $hasil=$nilai;
            }
            elseif($suhuKonversi=='°F'){
                $hasil=$nilai*9/5+32;
            }
            elseif($suhuKonversi=='°R'){
                $hasil=$nilai*4/5;
            }
            elseif($suhuKonversi=='°K'){
                $hasil=$nilai+273.15;
            }
        }
        // Pengkondisian suhu awal fahrenheit
        elseif($suhuAwal=="Fahreinheit"){
            if($suhuKonversi=='°C'){
                $hasil=($nilai-32)*5/9;
            }
            elseif($suhuKonversi=='°F'){
                $hasil=$nilai;
            }
            elseif($suhuKonversi=='°R'){
                $hasil=($nilai-32)*4/9;
            }
            elseif($suhuKonversi=='°K'){
                $hasil=($nilai+459.67)*5/9;
            }
        }
        // Pengkondisian suhu awal rheamur
        elseif($suhuAwal=="Rheamur"){
            if($suhuKonversi=='°C'){
                $hasil=$nilai*5/4;
            }
            elseif($suhuKonversi=='°F'){
                $hasil=$nilai*9/4+32;
            }
            elseif($suhuKonversi=='°R'){
                $hasil=$nilai;
            }
            elseif($suhuKonversi=='°K'){
                $hasil=$nilai*5/4+273.15;
            }
        }
        // Pengkondisian suhu kelvin
        elseif($suhuAwal=="Kelvin"){
            if($suhuKonversi=='°C'){
                $hasil=$nilai-273.15;
            }
            elseif($suhuKonversi=='°F'){
                $hasil=$nilai*9/5-459.67;
            }
            elseif($suhuKonversi=='°R'){
                $hasil=($nilai-273.15)*4/5;
            }
            elseif($suhuKonversi=='°K'){
                $hasil=$nilai;
            }
        }
        echo "<h2>Hasil konversi: $hasil $suhuKonversi</h2>";
    }
    ?>
</body>
</html>