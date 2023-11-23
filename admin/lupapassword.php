<?php
require('../Koneksi/koneksi.php');
session_start();


if (isset($_POST['submit'])) {
    $email = $_POST['txt_email'];

    // Generate OTP (One-Time Password)
    $otp = mt_rand(100000, 999999);

    // Simpan OTP di database atau sesuai kebutuhan
    // Kirim OTP ke email pengguna
    $subject = "Kode OTP untuk Reset Password";
    $message = "Kode OTP Anda adalah: $otp";
    $headers = "From: your_email@example.com";

    if (mail($email, $subject, $message, $headers)) {
        // OTP telah berhasil dikirim
        // Redirect ke halaman yang sesuai untuk verifikasi OTP
        header("Location: verifikasi_otp.php?email=" . $email);
    } else {
        echo "Gagal mengirim OTP. Silakan coba lagi.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>

     <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- css styleku -->
    <link rel="stylesheet" href="style.css">
    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&family=Poppins:ital,wght@0,100;0,300;0,500;0,900;1,100&display=swap" rel="stylesheet">
    
</head>
<body>


        <!-- navbar -->
<nav class="navbar navbar-expand-lg  mx-4">
<div class="container-fluid">
    <a class="navbar-brand" href="home.php">
      <img src="" alt="vokamart">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto"> <!-- Menggunakan ms-auto untuk meratakan ke kanan -->
        <li class="nav-item mx-4">
          <a class="nav-link" href="produk.php">Produk Kami</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="akun.php">Akun</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="#">Keranjang</a>
        </li>
      </ul>
    </div>
</div>
</nav>
<!-- akhir navbar -->

<section> 
    <div class="imgBox">
        <img src="../images/login.png" alt="">
    </div>
    <div class="contentBox">
        <div class="formBox"">
            <h2 style="font-size: 2rem; margin-top: 10px">Reset Password</h2>
            <form action="registrasi.php" method="POST">
                <div class="inputBox">
                    <span>Email yang didaftarkan</span>
                    <input type="text" name="txt_email">
                </div>
                <div style=" display: flex; justify-content: end; margin-bottom:0px; margin-top:0px;">
                     <p><a href="#">Kirim untuk kode OTP</a></p>
                </div>
                <div class="inputBox" style="margin-top:0px;">
                    <span>Kode OTP</span>
                    <input type="text" name="txt_username">
                </div>
                <div class="inputBox">
                    <span>Password Baru</span>
                    <input type="password" name="txt_pass">
                </div>
            
                <div class="inputBox">
                    <p>Belum punya akun? daftar di <a href="registrasi.php">sini</a></p>
                </div>
                <div class="inputBox" style="display: flex; text-align: center; justify-content: center; margin-top: 40px;">
                    <input type="submit" value="RESET" name="submit">
                </div>
            </form>
        </div>
    </div>
   </section>




   <!-- js -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>