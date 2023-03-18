<?php
// Deklarasi variabel
$jari = 4.2;
$tinggi = 5.4;

// NIM : 2110817210022
// Angka akhiran NIM 2 menghitung volume kerucut
$volume = 1/3 * 3.14 * $jari * $jari * $tinggi;

// Menampilkan hasil dengan 3 desimal dibelakang koma
echo number_format($volume, 3). " m3";
?>
