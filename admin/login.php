<?php
require ('../koneksi.php');
require ('navbar.php');
session_start();


if (isset($_POST['submit'])) {
  $userName = $_POST['txt_nama'];
  $pass = $_POST['txt_pass'];
  
  // $emailCheck = mysqli_real_escape_string($koneksi, $email);
  // $passCheck = mysqli_real_escape_string($pass, $pass);
  if(!empty(trim($userName)) && !empty(trim($pass))) {
      $query = "SELECT * FROM users WHERE username ='$userName'";
      $result = mysqli_query($koneksi, $query);
      $num = mysqli_num_rows($result);
      
      if($result) {
          $row = mysqli_fetch_array($result);
      }
      if($row) {
              $id = $row['id'];
              $userVal = $row['email'];
              $passVal = $row['password'];
              $userName = $row['username'];
              $level = $row['user_level'];
      }
      if ($num != 0) {
          if ($userName == $userName && $passVal == $pass) {
              header('Location: home.php');
          } else {
              
              header('Location: login.php?error=Password  atau user salah');
          }
      } else {
          
          header('Location: login.php?error=user tidak ditemukan');
          
      }
  } else {
    header('Location: login.php?error=data tidak boleh kosong');
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
            <!-- akhir tamoilan error -->
                <div class="inputBox">
                    <span>Username</span>
                    <input type="text" name="txt_nama">
                </div>
                <div class="inputBox">
                    <span>Password</span>
                    <input type="password" name="txt_pass">
                </div>
                <div class="lupapassword">
                  <p><a href="#">Lupa Password</a></p>
                </div>
                <div class="inputBox">
                    <p>Belum punya akun? Daftar di <a href="registrasi.php">sini</a></p>
                </div>
                <div class="inputBox">
                <button type="submit" value="Login" name="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
   </section>
<!-- akhir login -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>