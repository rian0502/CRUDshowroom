<?php
    include "config.php";
    if(isset($_GET['id'])){
        $id_kendaraan = $_GET['id'];
        $sql = "DELETE FROM kendaraan WHERE id_kendaraan='$id_kendaraan'";
        $qeury = mysqli_query(Koneksi::getConnection(), $sql);
        if($qeury){
            header("Location: http://localhost/showroom/data.php",true);
            exit();
        }else{
            header("Location: http://localhost/showroom/index.php",true);
            exit();
        }
    }else{
        die("Status di Tolak");
    }