<!-- digunakan agar hal pertama yg muncul itu login dulu jadi harus login dulu sebelum masuk ke home -->

<?php
session_start();
if($_SESSION['login']==false){
    header('location: login.php');
}else{
    header('location: home.php');
}


?>