<?php
session_start();
if(!isset($_SESSION["ready"])){
    header("Location: http://localhost/showroom/index.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Assets/style.css">
    <title>Data Kendaraan</title>
</head>
<body>
    <h2 class="judul">Data Kendaraan Showroom Makmur Sejahtera</h2>
    <table class="table-kendaraan" cellspacing="5" width="50%">
       <thead>
       <tr class="header-table">
           <th>ID KENDARAAN</th>
           <th>Merk Kendaraan</th>
           <th>Nama Kendaraan</th>
           <th>Jenis Kendaraan</th>
           <th>Plat No Kendaraan</th>
           <th colspan="2">Action</th>
       </tr>
       </thead>
        <tbody>
            <?php
            include "config.php";
            $sql = "SELECT * FROM kendaraan";
            $query = mysqli_query(Koneksi::getConnection(), $sql);
            while ($mobil = mysqli_fetch_array($query)){
                echo "<tr class='data-table'>";
                echo "<td>".$mobil['id_kendaraan']."</td>";
                echo "<td>".$mobil['merk_kendaran']."</td>";
                echo "<td>".$mobil['nama_kendaraan']."</td>";
                echo "<td>".$mobil['type_kendaraan']."</td>";
                echo "<td>".$mobil['no_polisi']."</td>";
                echo "<td><a href='delete.php?id=".$mobil['id_kendaraan']."'>Delete</a></td>";
                echo "<td><a href='update.php?id=".$mobil['id_kendaraan']."'>Update</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>

    </table>
</body>
</html>
