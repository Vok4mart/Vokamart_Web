<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- style boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  
   <!-- fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;600;700&family=Poppins:ital,wght@0,100;0,300;0,500;0,900;1,100&display=swap" rel="stylesheet">
    <!-- my style  -->
    <link rel="stylesheet" href="../css/list_alamat.css">
    <title>Document</title>
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
          <a class="nav-link" href="keranjang.php">Keranjang</a>
        </li>
      </ul>
    </div>
</div>
</nav>
<!-- akhir navbar -->

  <!-- list alamat -->
<div class="container">
  <!-- seach bar -->
  <div class="row-sm-1  ">
      <div class="card-body card-search-button d-flex flex-wrap">
        <form class=" form-search d-flex" role="search">
          <button type="submit">Cari</button>
              <input class="form-control" type="search" >
        </form>

          <a href="tambahalamat.php" class="btn btn-tambah-alamat btn-danger ms-auto align-self-center" style="padding: 5px 50px">Tambahkan Alamat</a>
      </div>
    
  </div>
      <!-- search bar -->
      <!-- card 1 -->
  <div class="row-sm-1 mb-4 ">
    <div class="card">
      <div class="card-body d-flex flex-wrap card-border" id="card1">
        <div class="wadah">
          <h5 class="card-title">Nama Penerima</h5>
          <h5 class="card-title">No.HP</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quas nostrum iure?</p>
        </div>
        <button class="btn btn-danger ms-auto align-self-center px-5" onclick="changeCardColor(document.getElementById('card1'))">pilih</button>
      </div>
    </div>
  </div>

    <!-- card 2 -->
  <div class="row-sm-1 mb-4 ">
    <div class="card">
      <div class="card-body d-flex flex-wrap card-border" id="card1">
        <div class="wadah">
          <h5 class="card-title">Nama Penerima</h5>
          <h5 class="card-title">No.HP</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quas nostrum iure?</p>
        </div>
        <button class="btn btn-danger ms-auto align-self-center px-5" onclick="changeCardColor(document.getElementById('card1'))">pilih</button>
      </div>
    </div>
  </div>
  
</div>





<!-- Js -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
// Variabel untuk menyimpan referensi card saat ini yang memiliki warna merah
var currentRedCard = null;

function changeCardColor(cardBorder) {
    // Memeriksa apakah card saat ini memiliki warna merah
    if (currentRedCard !== null) {
        // Menghapus warna merah dari card saat ini
        currentRedCard.style.borderColor = '';
    }

    // Set card saat ini sebagai card yang memiliki warna merah
    currentRedCard = cardBorder;

    // Set warna merah pada card yang baru diklik
    cardBorder.style.borderColor = 'red';
}
</script>





</body>
</html>