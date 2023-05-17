<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-image: url('gambar/bghome.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        table a {
            text-decoration: none;
        }

        button {
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
            text-decoration: none;
        }

        button:hover {
            background-color: #4cc9f0;
            -webkit-box-shadow: 10px 10px 99px 6px rgba(76,201,240,1);
            -moz-box-shadow: 10px 10px 99px 6px rgba(76,201,240,1);
            box-shadow: 10px 10px 99px 6px rgba(76,201,240,1);
        }
    </style>
</head>
<body>
    <div>
    <br><br><br>
    <br><br><br>
    <h1 style ="text-align: center;">Selamat Datang Di PustakaDigital</h1>
    <br>
    <table style = "margin-left:auto;margin-right:auto;">
        <tr>
            <td><img src="gambar/book.png" alt="" height= 170 width = 200><br><a href="Buku.php"><button>Buku</button></a></td>
            <td><img src="gambar/anggota.png" alt=""  height= 170 width = 200><br><a href="Member.php"><button>Member</button></a></td>
            <td><img src="gambar/peminjaman.png" alt="" height = 170 width = 200 ><br><a href="Peminjaman.php"><button>Peminjaman</button></a></td>
        </tr>
    </table>
    </div>
</body>
</html>