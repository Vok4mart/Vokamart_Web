<?php
require('../Koneksi/koneksi.php');
$id_produk = $_GET['id'];

// Misalnya, ambil data produk dari database berdasarkan $id_produk
// Sesuaikan dengan struktur tabel dan kolom di database Anda
$query = "SELECT * FROM produk WHERE id_produk = $id_produk";
$result = mysqli_query($koneksi, $query);

// Ambil data produk sebagai array asosiatif
$data_produk = mysqli_fetch_assoc($result);

// Jika data produk tidak ditemukan, Anda dapat menangani error atau redirect ke halaman lain
if (!$data_produk) {
    // Lakukan sesuatu, misalnya tampilkan pesan error atau redirect
    die("Produk tidak ditemukan");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>

     <!-- css bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
    <!-- link icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
     <!-- css styleku -->
    <link rel="stylesheet" href="../css/keranjang.css">
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




<div class="card mt-5">
    <div class="row">
        <div class="col-md-7 cart">
            <div class="col vertical-line"></div>

            <div class="form-check form-check-inline d-flex align-items-center">
                <input class="form-check-input rounded-circle mb-3" type="checkbox" id="inlineCheckbox1" value="option1">
            
                <div class="row main align-items-center card1 mx-2">
                    <div class="col-md-2 col-auto mx-2">
                        <!-- Tampilkan gambar produk dari database -->
                        <img class="img-rounded" src="../images/<?php echo $data_produk['gbr_produk']; ?>" alt="Produk">
                    </div>
                    <div class="col">
                        <div class="row mb-2 text-produk"><?php echo $data_produk['deskripsi_produk']; ?></div>
                        <div class="row text-muted harga-produk"><?php echo $data_produk['Harga_produk']; ?></div>
                    </div>
                    <div class="col d-flex align-items-end justify-content-end">
                        <a href="#"><i class="bi bi-plus"></i></a>
                        <span class="angka-keranjang" >1</span>
                        <a href="#"><i class="bi bi-dash"></i></a>
                        <a href="#"><i class="bi bi-trash mx-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>
      <!-- akhir card keranjang 1 -->   
    </div>


    <!-- sisi kiri card total belanja -->
    <div class="col-md-5 belanja">
      <!-- card total belanja -->
      <div class="border-box">
        <div class="row text-rb" style="padding: 0 0 2vh 0" > Ringkasan Belanja </div>
        <div class="row" style="padding: 0 0 2vh 0" > 
          <div class="col text-tb">Total Barang:</div>
          <div class="col text-right harga-barang" id="price">137.000</div>
        </div>
                   
        <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0 0 0;">
          <div class="col text-tbel">Total Belanja: </div>
          <div class="col text-right harga-total" id="price2" > 137.00</div>
        </div>
        <button class="btn btn-danger">CHECKOUT</button>
      </div>
      <!-- akhir card total belanja -->
    </div>

  </div>            
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>