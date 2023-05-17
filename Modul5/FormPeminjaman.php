<?php 
require('Model.php');
if (isset($_GET['id_peminjaman'])) {
    editpeminjaman();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjamanr</title>
   <?php echo (isset($_GET['id_peminjaman'])) ? "<title>Edit Data Peminjaman</title>": "<title>Tambah Data Peminjaman</title>" ?> 
</head>
<style>
    body {
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100vh;
      }

      form {
         width: 400px;
         padding: 20px;
         border: 1px solid #ccc;
         background-color: ;
         border-radius: 5px;
         box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; 
      }

      h2 {
        text-align: center;
         margin-top: 0;
         margin-bottom: 20px;
      }

      table {
         width: 100%;
      }

      td {
         text-align: center;
      }

      button {
         margin-top: 10px;
         display: block;
         width: 100%;
         height: 40px;
         background-color: black;
         color: white;
         border: none;
         border-radius: 15px;
         font-size: 15px;
         font-weight: bold;
      }

      button:hover {
         background-color: #b9e769;
         -webkit-box-shadow: 10px 10px 99px 6px rgba(185, 231, 105, 1);
         -moz-box-shadow: 10px 10px 99px 6px rgba(185, 231, 105, 1);
         box-shadow: 10px 10px 99px 6px rgba(185, 231, 105, 1);
      }
</style>
<body>
    <form action="" method="post">
        <table>
            <h2>Form Peminjaman</h2>
            <tr>
                <td>ID Peminjaman</td>
                <td><input type="text" name="id_Peminjaman" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["id_peminjaman"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
                <td>Tanggal Peminjaman</td>
                <td><input type="date" name="pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_peminjaman"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal Kembalian</td>
                <td><input type="date" name="kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_kembali"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php 
                    if (isset($_GET['id_peminjaman'])) {
                        echo "<button type=\"submit\" name=\"update\">Edit</button>";
                    }else {
                        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";    
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        tambahpeminjaman($_POST['id_Peminjaman'],$_POST['pinjam'],$_POST['kembali']);
    }
    if (isset($_POST['update'])) {
       updatepeminjaman($_POST['id_Peminjaman'],$_POST['pinjam'],$_POST['kembali']);
    }
    ?>
</body>
</html>