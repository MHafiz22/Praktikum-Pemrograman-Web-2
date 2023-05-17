<?php 
require('model.php');
if (isset($_GET['id_peminjaman'])){
    hapuspeminjaman($_GET['id_peminjaman']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body { 
            margin:auto;
            background-image: url('gambar/bgisi.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        th, td {
            text-align: center;
            vertical-align: middle
        }
  
  
        a{
            text-decoration: none;
        }

        li{
            list-style-type: none;
        }

        header{
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 0px 10%;
            background-color: black;
            justify-content: space-between;
        }

        nav ul{
            display: flex;
            flex-direction: row;
        }

        nav ul li{
            margin-left: 5px;
            margin-right: 5px;
        }

        nav ul li a{
            color: #FFF;
            display: block;
            padding: 5px 20px;
            border-radius: 1px;
            font-weight: bold;
        }

        nav ul li a:hover{
            color: #88B0EA;
        }

        button{
            margin-top: 20px;
            display: block;
            margin: 10px auto;
            width: 150px;
            height: 40px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 15px;
            font-size: 15px;
            font-weight: bold;
        }

        button:hover{
            background-color: #b9e769;
            -webkit-box-shadow: 10px 10px 99px 6px rgba(185, 231, 105, 1);
            -moz-box-shadow: 10px 10px 99px 6px rgba(185, 231, 105, 1);
            box-
            shadow: 10px 10px 99px 6px rgba(185, 231, 105, 1);
        }

        .edit:hover {
            background-color: #4cc9f0;
        }

        .hapus:hover {
            background-color: red;
        }

        .table-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 20px;
        }

        .table-wrapper table {
        margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <a style="color: #FFF; font-weight: 1000;">PustakaDigital</a>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Buku.php">Buku</a></li>
                <li><a href="Member.php">Member</a></li>
                <li><a href="Peminjaman.php">Peminjaman</a></li>
            </ul>
        </nav>
    </header>
    <br>
    <h1 style ="text-align:center">Peminjaman</h1>
    <div class="table-wrapper">
    <table class="table table-striped w-auto p-3 table-light">
        <thead>
            <tr>
                <th>ID Peminjaman</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilpeminjaman();
            ?>
        </tbody>
    </table>
    <br></br>
    <a href="FormPeminjaman.php"><button>Tambah Data</button></a> <br></br>
    </div>
</body>
</html>