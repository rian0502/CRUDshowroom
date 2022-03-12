<?php
include "config.php";
if (isset($_POST['tambah'])){
    $merk_mobil = mysqli_real_escape_string(Koneksi::getConnection(), $_POST['merk']);
    $nama_mobil = mysqli_real_escape_string(Koneksi::getConnection(), $_POST['namaMobil']);
    $type_mobil = mysqli_real_escape_string(Koneksi::getConnection(), $_POST['type']);
    $no_kendaraan = mysqli_real_escape_string(Koneksi::getConnection(), $_POST['nopol']);

    $sql = "INSERT INTO kendaraan (merk_kendaran, nama_kendaraan ,type_kendaraan, no_polisi) 
                VALUES ('$merk_mobil','$nama_mobil','$type_mobil','$no_kendaraan')";
    $query = mysqli_query(Koneksi::getConnection(), $sql);
    if($query){
        header("Location: http://localhost/showroom/data.php",true);
        exit();
    }else{
        header("Location: http://localhost/showroom/index.php",true);
        exit();
    }
}


