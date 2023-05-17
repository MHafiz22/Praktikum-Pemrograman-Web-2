<?php require('Model.php');
if (isset($_GET['id_member'])) {
    editmember();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Member</title>
   <?php echo (isset($_GET['id_member'])) ? "<title>Edit Member</title>": "<title>Tambah Member</title>" ?> 
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
         font-weight: 1000px
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
            <h2>Form Member</h2>
            <tr>
                <td>ID Member</td>
                <td><input type="text" name="id_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["id_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Nama Member</td>
                <td><input type="text" name="Nama" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nama_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Nomor Member</td>
                <td><input type="text" name="nomor" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nomor_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["alamat"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal Daftar</td>
                <td><input type="datetime-local" name="daftar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["tgl_mendaftar"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal bayar Terakhir</td>
                <td><input type="date" name="bayar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["tgl_terakhir_bayar"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php 
                    if (isset($_GET['id_member'])) {
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
        tambahmember($_POST['id_member'],$_POST['Nama'], $_POST['nomor'], $_POST['alamat'], $_POST['daftar'],$_POST['bayar']);
    }
    if (isset($_POST['update'])) {
       updatemember($_POST['id_member'],$_POST['Nama'], $_POST['nomor'], $_POST['alamat'], $_POST['daftar'],$_POST['bayar']);
    }
    ?>
</body>
</html>