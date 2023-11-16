<?php
require('../Koneksi/koneksi.php');

session_start();

if (isset($_POST['submit'])) {
    $email_akun = $_POST['email_akun'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $query = "SELECT * FROM akun WHERE email_akun = ?";
    $stmt = mysqli_prepare($koneksi, $query);  // Corrected $koneksi here

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $email_akun);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($result && $user = mysqli_fetch_assoc($result)) {
            // Check if the passwords match (without hashing)
            if ($password === $user['password']) {
                // Set session variables
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['email_akun'] = $user['email_akun'];

                // Redirect to the desired page after successful login
                header('Location: produk.php');
                exit();
            } else {
                $error_message = "Password salah.";
            }
        } else {
            $error_message = "Email tidak ditemukan.";
        }

        mysqli_stmt_close($stmt);
    } else {
        $error_message = "Error in preparing the statement.";
    }
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- css styleku -->
    <link rel="stylesheet" href="style.css">
    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&family=Poppins:ital,wght@0,100;0,300;0,500;0,900;1,100&display=swap" rel="stylesheet">
    
    <title>login</title>
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


<!-- awal login -->
<section> 
<div class="imgBox">
        <img src="../images/login.png" alt="">
    </div>

<div class="contentBox">
    
        <div class="formBox">
           <h2>Login</h2>
          
           <form action="login.php" method="POST">
              <!-- membuat tampilan error -->
            <?php if (isset($_GET['error'])){ ?>
              <div class="alert alert-danger" role="alert"><?php echo $_GET['error'];?></div>
            <?php }?>
            <!-- akhir tampilan error -->
                <div class="inputBox">
                    <span>Email</span>
                    <input type="email" name="email_akun"  >
                </div>
                <div class="inputBox">
                    <span>Password</span>
                    <input type="password" name="password" >
                </div>
                <div class="inputBox"style=" display: flex; justify-content: end; margin-bottom: 5px;">
                     <p><a href="lupapassword.php">Lupa Password</a></p>
                </div>
                <div class="inputBox">
                    <p>Belum punya akun? Daftar di <a href="registrasi.php">sini</a></p>
                </div>
                <div class="inputBox" style="display: flex; text-align: center; justify-content: center; margin-top: 20px;">
                    <input type="submit" value="Login" name="submit">
                </div>
            </form>
          
           
        </div>
    </div>

    
   </section>
   
<!-- akhir login -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
