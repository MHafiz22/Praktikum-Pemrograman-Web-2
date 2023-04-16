<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">       
    <meta  name="viewport"  content="width=device-width,  initial-scale=1.0">     
    <title>Modul 4 Soal 2</title>     
    <style>         
    table, tr, td, th {
        border-collapse: collapse;
        border: 1px solid;
        padding: 10px;
        padding-right: 20px;   
    }     
    </style> 
</head>
<body>
    <?php
        $mahasiswa = [
            ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
            ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
            ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
            ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75],
        ];

        foreach ($mahasiswa as $key => $value) {
            $mahasiswa[$key]['akhir'] = $value['uts'] * 0.4 + $value['uas'] * 0.6;
            if($mahasiswa[$key]['akhir']>= 80){
                $mahasiswa[$key]['huruf'] = 'A';
            } elseif($mahasiswa[$key]['akhir']>=  70  and ($mahasiswa[$key]['akhir'] <= 79)){
                $mahasiswa[$key]['huruf'] = 'B';
            } elseif($mahasiswa[$key]['akhir']>=  60  and ($mahasiswa[$key]['akhir'] <= 69)){
                $mahasiswa[$key]['huruf'] = 'C';
            } elseif($mahasiswa[$key]['akhir']>=  50  and ($mahasiswa[$key]['akhir'] <= 59)){
                $mahasiswa[$key]['huruf'] = 'D';
            } else {
                $mahasiswa[$key]['huruf'] = 'E';
            }
        }
    ?>         
    <table>
        <tr bgcolor="CCCDCC">
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>
        <?php foreach($mahasiswa as $a) { ?>
        <tr>
            <td><?php echo $a["nama"];?></td>
            <td><?php echo $a["nim"];?></td>
            <td><?php echo $a["uts"];?></td>
            <td><?php echo $a["uas"];?></td>
            <td><?php echo $a["akhir"];?></td>
            <td><?php echo $a["huruf"];?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>