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
    <title>ShowRoom Makmur Sejahtera</title>
    <link rel="stylesheet" href="Assets/styleTambah.css">
</head>
<body>
    <div class="from-tambah">
        <h3>Tambahkan Mobil</h3>
        <form action="tambahAction.php.php" method="post">
            <label for="input-merk">Merk Mobil</label>
            <input id="input-merk" type="text" name="merk" placeholder="ex: Toyota" required autocomplete="off">
            <label for="input-nama">Nama Mobil</label>
            <input id="input-nama" type="text" name="namaMobil" placeholder="ex: Avanza" required autocomplete="off">

            <label for="input-type">Type Mobil</label>
            <input id="input-type" type="text" name="type" placeholder="ex: SUV" required autocomplete="off">

            <label for="input-nopol">No Kendaraan</label>
            <input id="input-nopol" type="text" name="nopol" placeholder="ex: B 1234 ABCD" required autocomplete="off">
            <input type="submit" name="tambah" value="Tambah">
        </form>
    </div>
</body>
</html>