<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 3 Soal 5</title>
</head>
<body>
    <form action="" method="post">
            <input type="text" name="teks">
            <button type="submit" name="submit">submit</button>
    </form>
    <br>
    <?php if( isset($_POST['submit']) ) :
            $teks = $_POST['teks'];
            $arr = str_split($teks);
            for( $i = 1; $i <= count($arr); $i = $i + 1 ) {
                for( $j = 1; $j <= count($arr); $j = $j + 1 ) {
                    if( $j == 1 ) {
                        echo strtoupper($arr[$i-1]);
                    } else {
                        echo strtolower($arr[$i-1]);
                    }
                }
            }
        ?>
    <?php endif; ?>
</body>
</html>