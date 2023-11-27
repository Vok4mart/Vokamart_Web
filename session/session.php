<!-- digunakan agar hal pertama yg muncul itu login dulu jadi harus login dulu sebelum masuk ke home -->

<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['id_akun']) || !isset($_SESSION['username'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: login.php");
    exit();
}

// Jika sudah login, ambil data pengguna dari sesi
$id_akun = $_SESSION['id_akun'];
$username = $_SESSION['username'];

?>