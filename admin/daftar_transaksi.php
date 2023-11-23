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
    <link rel="stylesheet" href="../css/daftar_transaksi.css">
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

  
  <div class="row-sm-1 mb-4 ">
    <div class="card-body card-search-button d-flex">
      <form class=" form-search d-flex" role="search">
        <button type="submit">Cari</button>
            <input class="form-control" type="search" >
      </form>
    </div>
  </div>
   <!-- search bar -->

    <!-- card 1 -->
  <div class="row-sm-1 mb-4 ">
    <div class="card">
      <div class="card-body d-flex flex-wrap card-border">
        <img src="../images/1.jpeg" alt="">
        <div class="deskripsi ">
            <h5 class="card-title">Nama Barang</h5>
            <span class="card-text">Tanggal</span>
            <span class="card-text">Banyak Barang</span>
            <span class="card-text mb-4">Harga</span>
        </div>
        <div class="button  d-flex align-self-end justify-content-end ms-auto flex-wrap">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-danger mx-3 px-5 col-12 col-md-auto mb-2" >
              Ulas
            </button>



            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger col-12 col-md-auto" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Detail Transaksi
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Detail Transaksi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body d-flex " >
                    <div class="pembungkus">
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
                      <div class="detail-deskripsi ">
                        <div class="pembayaran">
                          <span>Metode</span>
                          <span>subtotal</span>
                          <span>Ongkos Kirim</span>
                          <span>Total</span>
                        </div>
                        <div class="pengiriman">
                          <span>Kurir</span>
                          <span>Resi</span>
                          <span>alamat</span>
                        </div>
                      </div>
                    </div>
                  <button class="align-self-start " >simpan</button> 
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                  </div>
                </div>
              </div>
            </div>
                
        </div> 
        
      </div>
    </div>
  </div>
 
  














  
</div>



<!-- Js -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>

</script>


</body>
</html>