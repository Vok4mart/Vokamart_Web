<?php
$server     = "localhost";
$username   = "root";
$password   = "";
$db         = "vokamart";
$koneksi    = mysqli_connect($server, $username, $password, $db);


if(!$koneksi){
    die("koneksi gagal :" .mysqli_connect_error());
}else{
    echo "koneksi berhasil";
}