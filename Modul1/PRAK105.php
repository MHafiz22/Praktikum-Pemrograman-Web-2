<?php
// Deklarasi daftar smartphone samsung dengan menggunakan associative array
$smartphone = array("S22" => "Samsung Galaxy S22", "S22+" => "Samsung Galaxy S22+", "A03" => "Samsung Galaxy A03", "Xcover5" => "Samsung Galaxy Xcover 5");
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Membuat agar tampilan tabel sesuai dengan soal -->
    <style>
        table, th, td {
            border: 1px solid;
        }
        th {
            font-size: 23px;
            background-color: red;
            height: 65px;
        }
    </style>
</head>
<body>
    <!-- Membuat tabel -->
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <tr>
            <td><?php echo $smartphone["S22"]?></td>
        </tr>
        <tr>
            <td><?php echo $smartphone["S22+"]?></td>
        </tr>
        <tr>
            <td><?php echo $smartphone["A03"]?></td>
        </tr>
        <tr>
            <td><?php echo $smartphone["Xcover5"]?></td>
        </tr>
    </table>
</body>
</html>