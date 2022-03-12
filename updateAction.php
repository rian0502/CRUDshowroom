<?php
    session_start();
    include "config.php";
    if(!isset($_SESSION["ready"])){
        header("Location: http://localhost/showroom/index.php");
    }else{
           $id_kendaraan = (int)$_POST['id_kendaraan'];
           $merk_mobil = mysqli_real_escape_string(Koneksi::getConnection(), $_POST['merk']);
           $nama_mobil = mysqli_real_escape_string(Koneksi::getConnection(), $_POST['namaMobil']);
           $type_mobil = mysqli_real_escape_string(Koneksi::getConnection(), $_POST['type']);
           $no_kendaraan = mysqli_real_escape_string(Koneksi::getConnection(), $_POST['nopol']);
           $sql = "UPDATE kendaraan SET 
                       merk_kendaran='$merk_mobil',
                       nama_kendaraan='$nama_mobil',
                       type_kendaraan='$type_mobil',
                       no_polisi='$no_kendaraan'
                       WHERE id_kendaraan = $id_kendaraan";
           $query = mysqli_query(Koneksi::getConnection(), $sql);
           if ($query){
               header("Location: http://localhost/showroom/data.php");
           }

    }
