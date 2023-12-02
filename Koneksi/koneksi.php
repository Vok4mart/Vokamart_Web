<?php
$server     = "localhost";
$username   = "root";
$password   = "";
$db         = "vokamart";
$koneksi    = mysqli_connect($server, $username, $password, $db);

if(mysqli_connect_errno()) {
    echo "Koneksi Gagal : " .mysqli_connect_error();
    exit();
}
// if(!$koneksi){
//     die ("koneksi gagal : " . mysqli_connect_error());
// }else{
//     echo "koneksi berhasil  ";
// }