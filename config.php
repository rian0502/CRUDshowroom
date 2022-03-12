<?php
    class Koneksi{
        private static string $USERNAME = "root";
        private static string $PASSWORD = "rian";
        private static string $HOST = "localhost";
        private static string $DATABASE = "showroom";

        public static function getConnection(){
            return mysqli_connect(Koneksi::$HOST, Koneksi::$USERNAME, Koneksi::$PASSWORD, Koneksi::$DATABASE);
        }

    }