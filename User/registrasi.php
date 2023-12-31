<?php
require('../Koneksi/koneksi.php');

session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['txt_email'];
    $username = $_POST['txt_username'];
    $password = $_POST['txt_pass'];

    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email tidak valid";
    } else {
        // Periksa apakah email sudah ada dalam database
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_prepare($koneksi, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) > 0) {
                echo "Email sudah terdaftar";
            } else {
                // Password hashing
                $hashed_password = password_hash($password, PASSWORD_BCRYPT);

                // Lakukan pendaftaran dengan prepared statement
                $insert_query = "INSERT INTO akun (email_akun, username, password) VALUES (?, ?, ?)";
                $insert_stmt = mysqli_prepare($koneksi, $insert_query);

                if ($insert_stmt) {
                    mysqli_stmt_bind_param($insert_stmt, "sss", $email, $username, $hashed_password);
                    $insert_result = mysqli_stmt_execute($insert_stmt);

                    if ($insert_result) {
                        header("Location: login.php");
                    } else {
                        echo "Registrasi gagal. Silakan coba lagi.";
                    }

                    mysqli_stmt_close($insert_stmt);
                } else {
                    echo "Terjadi kesalahan. Silakan coba lagi.";
                }
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "Terjadi kesalahan. Silakan coba lagi.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>

     <!-- css bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
     <!-- css styleku -->
    <link rel="stylesheet" href="../css/style.css">
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
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="akun.php">Akun</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="keranjang.php">Keranjang</a>
        </li>
      </ul>
    </div>
</div>
</nav>
<!-- akhir navbar -->

<!-- awal register -->
<section> 
    <div class="imgBox">
        <img src="../images/login.png" alt="">
    </div>
    <div class="contentBox">
        <div class="formBox">
            <h2>Register</h2>
            <form action="registrasi.php" method="POST">
                <div class="inputBox">
                    <span>Email</span>
                    <input type="text" name="txt_email">
                </div>
                <div class="inputBox">
                    <span>Username</span>
                    <input type="text" name="txt_username">
                </div>
                <div class="inputBox">
                    <span>Password</span>
                    <input type="password" name="txt_pass">
                </div>
                <div class="inputBox" style="display: flex; text-align: center; justify-content: center; margin-top: 50px;">
                    <input type="submit" value="Daftar" name="submit">
                </div>
                <div class="inputBox">
                    <p>Sudah punya akun? Login di <a href="login.php">sini</a></p>
                </div>
            </form>
        </div>
    </div>
   </section>
<!-- akhir register -->




   <!-- js -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>