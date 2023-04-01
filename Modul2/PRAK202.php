<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2 Soal 2</title>
    <!-- Memberikan warna merah pada pesan error -->
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    // Memeriksa apakah input nama, nim, dan jenis kelamin kosong atau tidak, dan menetapkan pesan error jika kosong
    $errorNama = $errorNim = $errorJenisk = "";
    if(isset($_POST["submit"])){
        if (empty($_POST["nama"])) {
            $errorNama = "nama tidak boleh kosong";
        }
        if (empty($_POST["nim"])) {
            $errorNim = "nim tidak boleh kosong";
        }
        if (empty($_POST["jenisk"])) {
            $errorJenisk = "jenis kelamin tidak boleh kosong";
        }
    }
    ?>
    <!-- Menginput nama, nim, dan jenis kelamin -->
    <form action="" method="post">
        Nama: <input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>">
        <span class="error">* <?php echo $errorNama;?></span><br>
        Nim: <input type="text" name="nim" value="<?=isset($_POST['nim']) ? $_POST['nim'] : ''?>">
        <span class="error">* <?php echo $errorNim;?></span><br>
        Jenis Kelamin: <span class="error">* <?php echo $errorJenisk;?></span><br>
        <input type="radio" name="jenisk" value="Laki-laki" <?php if (isset($_POST["jenisk"]) and $_POST["jenisk"] == "Laki-laki") echo "checked";?>>Laki-laki<br>
        <input type="radio" name="jenisk" value="Perempuan" <?php if (isset($_POST["jenisk"]) and $_POST["jenisk"] == "Perempuan") echo "checked";?>>Perempuan<br>
        <button type="submit" name="submit">Submit</button>
    </form><br>
    <?php
    // Memeriksa jika input tidak kosong akan menampilkan output sesuai dengan inputan
    if (isset($_POST["submit"])) {
        if (!empty($_POST["nama"]) and !empty($_POST["nim"]) and !empty($_POST["jenisk"])) {
            if(!empty($_POST["nama"])){
                echo $_POST["nama"]."<br>";
            }
            if(!empty($_POST["nim"])){
                echo $_POST["nim"]."<br>";
            }
            if(!empty($_POST["jenisk"])) {
                echo $_POST["jenisk"];
            }
        }
    }
    ?>
</body>
</html>