<?php
// Deklarasi daftar smartphone samsung dengan menggunakan indexed array
$smartphone = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Membuat agar tampilan tabel sesuai dengan soal -->
    <style>
        table, th, td {
            color: black;
            border: 1px solid;
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
            <td><?php echo $smartphone[0]?></td>
        </tr>
        <tr>
            <td><?php echo $smartphone[1]?></td>
        </tr>
        <tr>
            <td><?php echo $smartphone[2]?></td>
        </tr>
        <tr>
            <td><?php echo $smartphone[3]?></td>
        </tr>
    </table>
</body>
</html>