<?php
require('../Koneksi/koneksi.php');


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
    <link rel="stylesheet" href="../css/checkout.css">
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
          <a class="nav-link" href="keranjang.php">Keranjang</a>
        </li>
      </ul>
    </div>
</div>
</nav>
<!-- akhir navbar -->




<div class="card mt-5">
    <div class="row">
        <!-- sisi kanan card checkout -->
        <div class="col-md-7 cart">
            <!-- title -->
            <div class="title-checkout">
                <div class="checkout">Checkout</div>
                <div class="alamat-checkout" style="padding: 3vh 0 1vh 0;" >Alamat Pengiriman</div>
            </div> 
            
            <!-- card alamat penerima -->
            <div class="wadah"  style="padding: 2vh 0 1vh 0;">
                <h5 class="nama-penerima">Nama Penerima</h5>
                <h5 class="no-hp"  >No.HP</h5>
                <p class="deskripsi-alamat">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quas nostrum iure?</p>
                <button class="btn-ubah-alamat">Ubah Alamat</button>
            </div>
            
            
            
            <div class="scrollbar-card1">
                <!-- card checkout 1 --> 
                <div class="row main align-items-center card1 "  >
                    <div class=" col-auto ">
                        <img class="img-rounded" src="../images/1.jpeg">
                    </div>
                    <div class="col" style="padding-left: 2vh; padding-right:2vh;" >
                        <div class="row nama-barang " >Nama Barang</div>
                        <div class="row text-produk">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit alias quos quasi deleniti, dicta architecto id, dignissimos ullam magnam reprehenderit eos sequi vitae unde reiciendis placeat obcaecati nam neque dolorem?</div>
                        <div class="row  harga-produk">150.000</div>
                    </div>
                </div>
                <!-- card checkout 2 --> 
                <div class="row main align-items-center card1 "  >
                    <div class=" col-auto ">
                        <img class="img-rounded" src="../images/1.jpeg">
                    </div>
                    <div class="col" style="padding-left: 2vh; padding-right:2vh;" >
                        <div class="row nama-barang " >Nama Barang</div>
                        <div class="row text-produk">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit alias quos quasi deleniti, dicta architecto id, dignissimos ullam magnam reprehenderit eos sequi vitae unde reiciendis placeat obcaecati nam neque dolorem?</div>
                        <div class="row  harga-produk">150.000</div>
                    </div>
                </div>
                <!-- card checkout 3 --> 
                <div class="row main align-items-center card1 "  >
                    <div class=" col-auto ">
                        <img class="img-rounded" src="../images/1.jpeg">
                    </div>
                    <div class="col" style="padding-left: 2vh; padding-right:2vh;" >
                        <div class="row nama-barang " >Nama Barang</div>
                        <div class="row text-produk">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit alias quos quasi deleniti, dicta architecto id, dignissimos ullam magnam reprehenderit eos sequi vitae unde reiciendis placeat obcaecati nam neque dolorem?</div>
                        <div class="row  harga-produk">150.000</div>
                    </div>
                </div>
                <!-- akhir card keranjang 1 -->   
            </div>
    
            
        </div>


        <!-- sisi kiri card total belanja -->
        <div class="col-md-5 belanja">
        <!-- card total belanja -->
        <div class="border-box">
            <!-- button Pengiriman -->
            <div  class="dropdown-center">
                <button class="btn btn-outline-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pilih Pengiriman
                </button>
                <ul class="dropdown-menu">
                    <li style="border-bottom: 1px #aaaaaa solid;">
                        <a class="dropdown-item" href="#" onclick="showOptionInfo('Reguler', 'estimasi', 'harga')">
                            <div class="option-info">
                                <span class="option-title">Reguler</span>
                                <div class="option-description-harga">
                                    <span class="option-description">estimasi</span>
                                    <span class="option-harga">harga</span>
                                </div>
                            </div>
                            
                        </a>
                    </li>
                    <li style="border-bottom: 1px #aaaaaa solid;">
                        <a class="dropdown-item" href="#" onclick="showOptionInfo('Sicepat', 'estimasi', 'harga')">
                            <div class="option-info">
                                <span class="option-title">Sicepat</span>
                                <div class="option-description-harga">
                                    <span class="option-description">estimasi</span>
                                    <span class="option-harga">harga</span>
                                </div>
                            </div>
                            
                        </a>
                    </li>
                    <li style="border-bottom: 1px #aaaaaa solid;">
                        <a class="dropdown-item" href="#" onclick="showOptionInfo('JNE', 'estimasi', 'harga')">
                            <div class="option-info">
                                <span class="option-title">JNE</span>
                                <div class="option-description-harga">
                                    <span class="option-description">estimasi</span>
                                    <span class="option-harga">harga</span>
                                </div>
                            </div>
                            
                        </a>
                    </li>
                </ul>

            
                <!-- informasi pilihan pengiriman setelah klik -->
                <div id="selected-option-info" class="option-info">
                    <span class="">Klik salah satu pengiriman di atas</span>
                </div>

            </div>

            <!-- akhir button Pengiriman -->

            <!-- butoon pembayaran -->
            <div class="dropdown-center">
            <button class="btn btn-outline-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pilih Pembayaran
                </button>
    <ul class="dropdown-menu">
        <li style="border-bottom: 1px #aaaaaa solid;">
            <a class="dropdown-item" href="#" onclick="showPaymentInfo('DANA')">
                <div class="option-info-gambar">
                    <span class="option-gambar"><img src="../images/dana.jpeg" alt=""></span>
                    <span class="option-title-gambar">DANA</span>
                </div>
            </a>
        </li>
        <li style="border-bottom: 1px #aaaaaa solid;">
            <a class="dropdown-item" href="#" onclick="showPaymentInfo('OVO')">
                <div class="option-info-gambar">
                    <span class="option-gambar"><img src="../images/ovo.jpeg" alt=""></span>
                    <span class="option-title-gambar">OVO</span>
                </div>
            </a>
        </li>
        <li style="border-bottom: 1px #aaaaaa solid;">
            <a class="dropdown-item" href="#" onclick="showPaymentInfo('Mandiri')">
                <div class="option-info-gambar">
                    <span class="option-gambar"><img src="../images/mandiri.png" alt=""></span>
                    <span class="option-title-gambar">Mandiri</span>
                </div>
            </a>
        </li>
        <li style="border-bottom: 1px #aaaaaa solid;">
            <a class="dropdown-item" href="#" onclick="showPaymentInfo('BRI')">
                <div class="option-info-gambar">
                    <span class="option-gambar"><img src="../images/bri.png" alt=""></span>
                    <span class="option-title-gambar">BRI</span>
                </div>
            </a>
        </li>
        <li style="border-bottom: 1px #aaaaaa solid;">
            <a class="dropdown-item" href="#" onclick="showPaymentInfo('BRI')">
                <div class="option-info-gambar">
                    <span class="option-gambar"><img src="../images/bri.png" alt=""></span>
                    <span class="option-title-gambar">BRI</span>
                </div>
            </a>
        </li>
    </ul>
    <!-- informasi pilihan pembayaran ketika klik -->
    <div id="selected-payment-info" class="option-info-gambar mt-1" >
        <span class="option-title-gambar mx-0">Klik salah satu pembayaran di atas</span>
    </div>
</div>

            <!-- akhir button pembayaran -->

            
            <div class="row text-rb" style="padding: 0 0 2vh 1vh" > Ringkasan Belanja </div>
            <div class="row" style="padding: 0 0 2vh 1vh" > 
            <div class="col text-tb">Total Barang:</div>
            <div class="col text-right harga-barang" id="price">137.000</div>
            </div>
                  
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0 0 1vh;">
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
<script>

    // fungsi tombol pengiriman 
    function showOptionInfo(title, description, harga) {
    var optionInfoElement = document.getElementById('selected-option-info');
    var htmlContent = `
        
        <div class="option-info">
                    <span class="option-title">${title}</span>
                    <div class="option-description-harga">
                        <span class="option-description">${description}</span>
                        <span class="option-harga">${harga}</span>
                    </div>
                </div>
    `;
    optionInfoElement.innerHTML = htmlContent;
}



// fungsi tombol pembayaran 
function showPaymentInfo(paymentMethod) {
        // Mendapatkan elemen informasi terpilih
        var selectedPaymentInfoElement = document.getElementById('selected-payment-info');

        // Menampilkan informasi terpilih
        selectedPaymentInfoElement.innerHTML = `
            <span class="option-gambar"><img src="../images/${paymentMethod.toLowerCase()}.jpeg" alt=""></span>
            <span class="option-gambar"><img src="../images/${paymentMethod.toLowerCase()}.png" alt=""></span>
            <span class="option-title-gambar">${paymentMethod}</span>
        `;
    }
    
</script>
</body>
</html>