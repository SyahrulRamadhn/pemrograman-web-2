<?php
//konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "mid_pweb2";

//perintah php untuk mengakses database
$koneksi = new mysqli();
$koneksi->connect($host, $user, $password, $database);
?>