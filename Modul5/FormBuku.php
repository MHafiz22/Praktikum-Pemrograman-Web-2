<?php require('Model.php');
if (isset($_GET['id_buku'])) {
    editbuku();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buku</title>
    <?php echo (isset($_GET['id_buku'])) ? "<title>Edit Buku</title>": "<title>Tambah Buku</title>" ?> 
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
            <h2>Form Buku</h2>
            <tr>
                <td>ID Buku</td>
                <td><input type="text" name="id_buku" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["id_buku"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["judul_buku"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Nama Penulis</td>
                <td><input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penulis"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penerbit"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" name="thnterbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["tahun_terbit"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php 
                    if (isset($_GET['id_buku'])) {
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
        tambahbuku($_POST['id_buku'],$_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
    }
    if (isset($_POST['update'])) {
       updatebuku($_GET['id_buku'],$_POST['judul'],$_POST['penulis'],$_POST['penerbit'],$_POST['thnterbit']);
    }
    ?>
</body>
</html>