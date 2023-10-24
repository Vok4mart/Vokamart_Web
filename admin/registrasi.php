<?php
require (   "navbar.php");
session_start();

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
    <link rel="stylesheet" href="style.css">
    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&family=Poppins:ital,wght@0,100;0,300;0,500;0,900;1,100&display=swap" rel="stylesheet">
    
</head>
<body>
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
</body>
</html>