<?php
    session_start();
    include "config.php";
        if (isset($_POST['login'])){
            $username = mysqli_real_escape_string(Koneksi::getConnection(), $_POST['username']);
            $password = mysqli_real_escape_string(Koneksi::getConnection(), $_POST['password']);
            $sql = "SELECT * FROM akun WHERE username ='$password'";
            $query = mysqli_query(Koneksi::getConnection(), $sql);
            if($query->num_rows > 0){
                $data = mysqli_fetch_assoc($query);
                if(password_verify($password, $data['password'])){
                    $_SESSION["ready"] = true;
                    header("Location: http://localhost/showroom/menu.php");
                }else{
                    header("Location: http://localhost/showroom/index.php");
                }
            }else{
                header("Location: http://localhost/showroom/index.php");
            }
        }


