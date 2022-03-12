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
    <title>Menu Showroom Admin</title>
    <link rel="stylesheet" href="Assets/styleMenu.css">
</head>
<body>
    <h2>Home, Pilihan Menu</h2>

    <div class="menu-button">
        <table cellspacing="40">
            <tr>
                <th>Show Data</th>
                <th>Add Data</th>
                <th>Logout</th>
            </tr>
            <tr>
                <td><a href="data.php"><img src="Assets/images/task-list.png" alt="lihat-data" width="80"></a></td>
                <td> <a href="tambah.php"><img src="Assets/images/add.png" alt="tambah-data" width="80" height="80"></a></td>
                <td><a href="logout.php"><img src="Assets/images/shutdown.png" alt="logout" width="80"></a></td>
            </tr>
        </table>
    </div>

</body>
</html>