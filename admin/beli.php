<?php
require('../Koneksi/koneksi.php');
$id_produk = $_GET['id'];

if(isset($_SESSION['$keranjang'][$id_produk]))
{
$_SESSION['$keranjang'][$id_produk]+=1;
}

else
{
    $_SESSION['$keranjang'][$id_produk] = 1;
}

echo "<script>alert('produk telah masuk ke keranjang belanja');</script>";
echo "<script>location='checkout.php';</script>";

?>