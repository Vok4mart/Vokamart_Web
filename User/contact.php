<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- style boostrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  
  <!-- iconn bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
   <!-- fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;600;700&family=Poppins:ital,wght@0,100;0,300;0,500;0,900;1,100&display=swap" rel="stylesheet">
    <!-- my style  -->
    <link rel="stylesheet" href="../css/contact.css">
    <title>Document</title>
</head>
<body>
        <!-- navbar -->
<nav class="navbar navbar-expand-lg  mx-4">
<div class="container-fluid">
    <a class="navbar-brand" href="home.php">
    <img src="../images/logo_vokamart.png" alt="vokamart" style="max-width: 150px;" >
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




  <!-- Kontak Kami -->
  <div class="container mt-5">
    <div class="row contact-maps">
    <div class="col-md-6 contact-info ">
      <h2 class="text-center">CONTACT US</h2>
      <div class="info mx-4 ">
        <p class="">Kami akan selalu ada dan akan melayani anda dengan layanan prima</p>
        <p class="address"><i class="bi bi-geo-alt-fill"></i> Jl. Kartini no. 1 Jember</p>
        <p class="email" ><i class="bi bi-envelope-at-fill"></i> info@vok4mart.smepa.id</p>
        <p class="handphone" ><i class="bi bi-telephone-fill"></i> 0895-2256-2432</p>
      </div>
    </div>
          <div class="col-md-6 maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.3182021805364!2d113.69587794320377!3d-8.170662524326739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6c02875b6a4a3%3A0xfdbefe18bd97a57d!2sSMK%20Negeri%204%20Jember!5e0!3m2!1sid!2sid!4v1701135399817!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
    </div>
    </div>



  <div class="form-message mt-5 mx-auto ">
    <form>
    <h2 class="text-center mb-3" >Send Message</h2>
      <div class="row">
        <div class="col-md-6 mb-3">
          <input type="text" class="form-control" placeholder="Nama Lengkap">
        </div>
        <div class="col-md-6 mb-3">
          <input type="email" class="form-control" placeholder="Alamat Email">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <input type="text" class="form-control" placeholder="Subjek">
        </div>
        <div class="col-md-6 mb-3">
          <input type="tel" class="form-control" placeholder="Phone">
        </div>
      </div>
      <div class="mb-3">
        <textarea class="form-control" rows="4" placeholder="Message"></textarea>
      </div>
      <a href="#" class="btn btn-danger" >Kirim</a>
    </form>
  </div>









</div>



<!-- Js -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>






</body>
</html>