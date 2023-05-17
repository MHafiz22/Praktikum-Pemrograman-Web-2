<?php 
function koneksi() {
    try{
        $pdo_conn = new PDO('mysql:host=localhost;dbname=501','root','',
        array(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT=>TRUE)
    );
    }catch(PDOException $e){
        print "Koneksi Gagal".$e->getMessage() . "<br/>";
        die();
    }
    return $pdo_conn;
}
?>