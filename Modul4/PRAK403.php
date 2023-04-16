<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">       
    <meta  name="viewport"  content="width=device-width,  initial-scale=1.0">     
    <title>Modul 4 Soal 3</title>   
    <style>         
    table, tr, td, th {
        border-collapse: collapse;
        border: 1px solid;
        padding: 5px; 
    }     
    </style> 
</head>
<body>
    <?php
        $mahasiswa = [
             ["no"=> 1,"nama" => "Ridho","matkul" => ["Pemrograman 1","Praktikum Pemrograman 1","Pengantar Lingkungan Lahan Basah","Arsitektur Komputer"],"sks"=>[2,1,2,3]],
             ["no"=>2,"nama" => "Ratna","matkul" => ["Basis Data 1","Praktikum Basis Data 1","Kalkulus"],"sks"=>[2,1,3]],
             ["no"=>3,"nama" => "Tono","matkul" => ["Rekayasa Perangkat Lunak","Analisa dan Perancangan Sistem","Komputasi Awan","Kecerdasan Bisnis"],"sks"=>[3,3,3,3]],
        ];

        foreach ($mahasiswa as $key => $value) {
            $mahasiswa[$key]['total'] = array_sum($value['sks']);
            if($mahasiswa[$key]['total'] < 7){
                 $mahasiswa[$key]['ket'] = "Revisi KRS";
            }
            else{
                $mahasiswa[$key]['ket'] = "Tidak Revisi";
            }
        }
    ?>
    <table>
    <tr bgcolor = "CCCDCC">
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
    </tr>
    <?php
        foreach($mahasiswa as $a){
            ?><tr>
                <td><?php
                echo $a["no"];
                ?></td>
                <td><?php
                echo $a["nama"];
                ?></td><td><?php
                echo $a["matkul"][0];?>
                </td><td><?php
                echo $a["sks"][0];?>
                </td><td><?php
                    echo $a["total"];
                ?></td><?php
                if($a['total'] < 7){
                    ?> <td bgcolor = "#FF3131"><?php
                    echo $a["ket"];
                }else{
                    ?> <td bgcolor = "#1AA857"><?php
                    echo $a["ket"];
                }?></td></tr>
                <tr>
                <td></td>
                <td></td>
                    <td><?php
                echo $a["matkul"][1];?>
                </td><td><?php
                echo $a["sks"][1];?>
                </td><td></td><td></td></tr>
                <tr>
                <td></td>
                <td></td>
                    <td><?php
                echo $a["matkul"][2];?>
                </td><td><?php
                echo $a["sks"][2];?>
                </td><td></td><td></td></tr>
                <tr>
                <?php
                    if(!empty($a['matkul'][3])){?>
                    <td></td><td></td><td><?php    
                        echo $a["matkul"][3];?>
                    </td><td><?php
                    }
                    if(!empty($a['sks'][3])){?>
                    <?php
                        echo $a["sks"][3];?>
                        </td><td></td></tr><?php
                    }?>
                <?php
            } ?>
    </table>
</body>
</html>