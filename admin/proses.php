<?php 
require('../Koneksi/koneksi.php');


$nama_penerima = $_POST['nama_akun'];
$alamat_lengkap = $_POST['alamat_lenkap'];
$email_akun = $_POST['email_akun'];
$harga_produk = $_POST['harga_produki'];
$order_id = rand();

mysqli_query($koneksi,"insert into akun values('','$nama_akun','$email_akun',)");

header("location:./midtrans/examples/snap/checkout-process-simple-version.php?order_id=$order_id");

?>