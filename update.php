<?php
    session_start();
    include "config.php";
    if(!isset($_SESSION["ready"])){
        header("Location: http://localhost/showroom/index.php");
    }else{
        $id_kend = $_GET['id'];
        $sql = "SELECT * FROM kendaraan WHERE id_kendaraan = '$id_kend'";
        $query = mysqli_query(Koneksi::getConnection(), $sql);
        $mobil = mysqli_fetch_assoc($query);
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShowRoom Makmur Sejahtera</title>
    <link rel="stylesheet" href="Assets/styleTambah.css">
</head>
<body>
<div class="from-tambah">
    <h3>Tambahkan Mobil</h3>
    <form action="updateAction.php" method="POST">
        <input type="hidden" name="id_kendaraan" required autocomplete="off" value="<?php echo $mobil['id_kendaraan']?>">
        <label for="input-merk">Merk Mobil</label>
        <input id="input-merk" type="text" name="merk" placeholder="ex: Toyota" required autocomplete="off" value="<?php echo $mobil['merk_kendaran'] ?>">
        <label for="input-nama">Nama Mobil</label>
        <input id="input-nama" type="text" name="namaMobil" placeholder="ex: Avanza" required autocomplete="off" value="<?php echo $mobil['nama_kendaraan'] ?>">
        <label for="input-type">Type Mobil</label>
        <input id="input-type" type="text" name="type" placeholder="ex: SUV" required autocomplete="off" value="<?php echo $mobil['type_kendaraan'] ?>">
        <label for="input-nopol">No Kendaraan</label>
        <input id="input-nopol" type="text" name="nopol" placeholder="ex: B 1234 ABCD" required autocomplete="off" value="<?php echo $mobil['no_polisi']?>">
        <input type="submit" name="save" value="Simpan">
    </form>
</div>
</body>
</html>