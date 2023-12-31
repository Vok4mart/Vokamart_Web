<?php

session_start();

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Produk Kami</title>
    <link rel="stylesheet" href="../css/produk.css">
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- icon bintang -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;600;700&family=Poppins:ital,wght@0,100;0,300;0,500;0,900;1,100&display=swap" rel="stylesheet">
    
    <!-- link icon search -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="contact.php">Contact</a>
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

   
    <div class="search-filter ">
     <!-- search bar  -->
    <form class=" form-search d-flex" role="search">
    <button type="submit">Cari</button>
        <input class="form-control" type="search" >
        
      </form>
    <!-- filters -->
    <div class="form-filter ">
    <select class="form-control">
        <option selected>Pilih</option>
      <option>Elektronika</option>
      <option>Baju</option>
      <option>Makanan</option>
      <option>Minuman</option>
      <option>ATK</option>
    </select>
    </div>
  </div>

    
  </div>
    <!-- filter -->
    <div class="container justify-content-center">
        


        <div class="gbrsatu"><img src="../images/20142456_Black-Friday-Facebook-Cover-Banner-08 1.png" alt=""></div>
        <div class="gbrdua"><img src="../images/9884272_104 1.png" alt=""></div>
        <div class="gbrtiga"><img src="../images/22753609_Furniture-Facebook-Cover-Banner-21 1.png" alt=""></div>
        <div class="gbrempat"><img src="../images/15951115_Food-Social-Media-Banner-17 1.png" alt=""></div>
        <div class="gbrlima">
            <div class="ct1">Kategori Produk</div>
            <!-- scrollbar Kategori -->
            <div class="scrollbar-ct">
              
                <div class="kotak">
                    <div class="ct3"></div>
                    <div class="ct-text">Makanan</div>
                </div>
                <div class="kotak">
                    <div class="ct3"></div>
                    <div class="ct-text">Minuman</div>
                </div>
                <div class="kotak">
                    <div class="ct3"></div>
                    <div class="ct-text">Elektronika</div>
                </div>
                <div class="kotak">
                    <div class="ct3"></div>
                    <div class="ct-text">Baju</div>
                </div>
                <div class="kotak">
                    <div class="ct3"></div>
                    <div class="ct-text">DIY</div>
                </div>
                <div class="kotak">
                    <div class="ct3"></div>
                    <div class="ct-text">ATK</div>
                </div>
                <div class="kotak">
                    <div class="ct3"></div>
                    <div class="ct-text">Furniture</div>
                </div>
                <div class="kotak">
                    <div class="ct3"></div>
                    <div class="ct-text">Fotografi</div>
                </div>
                <div class="kotak">
                    <div class="ct3"></div>
                    <div class="ct-text">Makanan</div>
                </div>
                <div class="kotak">
                    <div class="ct3"></div>
                    <div class="ct-text">Minuman</div>
                </div>
            </div> 
             <!-- akhir scrollbar Kategori -->
        </div>
    


        <!-- card produk terlaris  -->
        <div class="wadah ">
        <h2 class=" ">Produk Terlaris Kami</h2>
         <div class="row row-cols-md-4 row-cols-2 " id="konten">
        
                <?php
                // Konfigurasi koneksi database
                $server   = "localhost";
                $username = "root";
                $password = "";
                $db       = "vokamart";
                $koneksi  = mysqli_connect($server, $username, $password, $db);

                if (mysqli_connect_errno()) {
                    echo "Koneksi Gagal: " . mysqli_connect_error();
                    exit();
                }

                // Query untuk mengambil data produk
                $query = "SELECT * FROM produk LIMIT 8";
                $result = mysqli_query($koneksi, $query);

                // Loop untuk setiap produk
                while ($produk = mysqli_fetch_assoc($result)) {
                    ?>
                    <!-- Produk -->
                    <div class="col mb-3">
                        <div class="card">
                            <img src=" ../images/image 2.png <?php echo $produk['gbr_produk']; ?>" class="card-img-top" alt="...">
                            <a href="detail_produk.php?id=<?php echo $produk['id_produk']; ?>">
                                <div class="card-footer d-flex flex-column">
                                    <p class="card-text small mb-0"><?php echo $produk['id_kategori']; ?></p>
                                    <p class="card-title fw-bold lead"><?php echo $produk['Nama_produk']; ?></p>
                                    <div class="mb-1">
                                        <!-- Rating stars -->
                                    </div>
                                    <div class="d-flex">
                                        <div>
                                            <p class="card-text mb-0">Harga</p>
                                            <p class="card-title"><?php echo $produk['Harga_produk']; ?></p>
                                        </div>
                                        <a class="btn btn-danger ms-auto" href="keranjang.php?id=">
                                            <i class="bi bi-bag-fill"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>
         </div>
        </div>

                <!-- card produk Elektronika -->
        <!-- card produk 2 -->
        <div class="wadah2">
            <h2 class=" ">Elektronika</h2>
            <div class="row row-cols-md-4 row-cols-2 " id="konten">
                <!-- produk 1 -->
                <div class="col mb-4">
                    <div class="card">
                        <img src="../images/image 2.png" class="card-img-top" alt="...">
                        
                
                        <a href="#" ><div class="card-footer d-flex flex-column ">
                        <p class="card-text small mb-0" >Kategori Barang</p>
                        <p class="card-title fw-bold lead" >Nama Barang Yang Ditampilkan </p>
                        <div class="mb-1">
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star align-self-start"></span>
                            <span class="fa fa-star align-self-start"></span>
                        </div>
                        <div class="d-flex">
                        <div>
                            <p class="card-text mb-0">Harga</p>
                            <p class="card-title" >$4000</p>
                        </div>
                            <a class="btn btn-danger ms-auto">
                                <i class="bi bi-bag-fill"></i>
                            </a>
                        </div>
                        

                        </div></a>
                    </div>
                </div>
            


            </div>
        </div>
  


          <!-- card produk 3  Fashion-->
        <div class="wadah3 d-flex flex-wrap">
            <h2 class=" fw-bolder mb-4">Fashion</h2>
            <div class="row row-cols-md-4 row-cols-2 " id="konten">
                <!-- produk 1 -->
                <div class="col mb-4">
                    <div class="card">
                        <img src="../images/image 2.png" class="card-img-top" alt="...">
                        
                
                        <a href="#" ><div class="card-footer d-flex flex-column ">
                        <p class="card-text small mb-0" >Kategori Barang</p>
                        <p class="card-title fw-bold lead" >Nama Barang Yang Ditampilkan </p>
                        <div class="mb-1">
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star align-self-start"></span>
                            <span class="fa fa-star align-self-start"></span>
                        </div>
                        <div class="d-flex">
                        <div>
                            <p class="card-text mb-0">Harga</p>
                            <p class="card-title" >$4000</p>
                        </div>
                            <a class="btn btn-danger ms-auto">
                                <i class="bi bi-bag-fill"></i>
                            </a>
                        </div>
                        

                        </div></a>
                    </div>
                </div>
                <!-- produk 2 -->
                <div class="col mb-3">
                    <div class="card">
                        <img src="../images/image 2.png" class="card-img-top" alt="...">
                        
                
                        <a href="#" ><div class="card-footer d-flex flex-column ">
                        <p class="card-text small mb-0" >Kategori Barang</p>
                        <p class="card-title fw-bold lead" >Nama Barang Yang Ditampilkan </p>
                        <div class="mb-1">
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star align-self-start"></span>
                            <span class="fa fa-star align-self-start"></span>
                        </div>
                        <div class="d-flex">
                        <div>
                            <p class="card-text mb-0">Harga</p>
                            <p class="card-title" >$4000</p>
                        </div>
                            <a class="btn btn-danger ms-auto">
                                <i class="bi bi-bag-fill"></i>
                            </a>
                        </div>
                        

                        </div></a>
                    </div>
                </div>
                <!-- produk 3 -->
                <div class="col mb-3">
                    <div class="card">
                        <img src="../images/image 2.png" class="card-img-top" alt="...">
                        
                
                        <a href="#" ><div class="card-footer d-flex flex-column ">
                        <p class="card-text small mb-0" >Kategori Barang</p>
                        <p class="card-title fw-bold lead" >Nama Barang Yang Ditampilkan </p>
                        <div class="mb-1">
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star align-self-start"></span>
                            <span class="fa fa-star align-self-start"></span>
                        </div>
                        <div class="d-flex">
                        <div>
                            <p class="card-text mb-0">Harga</p>
                            <p class="card-title" >$4000</p>
                        </div>
                            <a class="btn btn-danger ms-auto">
                                <i class="bi bi-bag-fill"></i>
                            </a>
                        </div>
                        

                        </div></a>
                    </div>
                </div>
                <!-- produk 4 -->
                <div class="col mb-3">
                    <div class="card">
                        <img src="../images/image 2.png" class="card-img-top" alt="...">
                        
                
                        <a href="#" ><div class="card-footer d-flex flex-column ">
                        <p class="card-text small mb-0" >Kategori Barang</p>
                        <p class="card-title fw-bold lead" >Nama Barang Yang Ditampilkan </p>
                        <div class="mb-1">
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star align-self-start"></span>
                            <span class="fa fa-star align-self-start"></span>
                        </div>
                        <div class="d-flex">
                        <div>
                            <p class="card-text mb-0">Harga</p>
                            <p class="card-title" >$4000</p>
                        </div>
                            <a class="btn btn-danger ms-auto">
                                <i class="bi bi-bag-fill"></i>
                            </a>
                        </div>
                        

                        </div></a>
                    </div>
                </div>
                <!-- produk 5 -->
                <div class="col mb-3">
                    <div class="card">
                        <img src="../images/image 2.png" class="card-img-top" alt="...">
                        
                
                        <a href="#" ><div class="card-footer d-flex flex-column ">
                        <p class="card-text small mb-0" >Kategori Barang</p>
                        <p class="card-title fw-bold lead" >Nama Barang Yang Ditampilkan </p>
                        <div class="mb-1">
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star align-self-start"></span>
                            <span class="fa fa-star align-self-start"></span>
                        </div>
                        <div class="d-flex">
                        <div>
                            <p class="card-text mb-0">Harga</p>
                            <p class="card-title" >$4000</p>
                        </div>
                            <a class="btn btn-danger ms-auto">
                                <i class="bi bi-bag-fill"></i>
                            </a>
                        </div>
                        

                        </div></a>
                    </div>
                </div>
                <!-- produk 6 -->
                <div class="col mb-3">
                    <div class="card">
                        <img src="../images/image 2.png" class="card-img-top" alt="...">
                        
                
                        <a href="#" ><div class="card-footer d-flex flex-column ">
                        <p class="card-text small mb-0" >Kategori Barang</p>
                        <p class="card-title fw-bold lead" >Nama Barang Yang Ditampilkan </p>
                        <div class="mb-1">
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star align-self-start"></span>
                            <span class="fa fa-star align-self-start"></span>
                        </div>
                        <div class="d-flex">
                        <div>
                            <p class="card-text mb-0">Harga</p>
                            <p class="card-title" >$4000</p>
                        </div>
                            <a class="btn btn-danger ms-auto">
                                <i class="bi bi-bag-fill"></i>
                            </a>
                        </div>
                        

                        </div></a>
                    </div>
                </div>
                <!-- produk 7 -->
                <div class="col mb-3">
                    <div class="card">
                        <img src="../images/image 2.png" class="card-img-top" alt="...">
                        
                
                        <a href="#" ><div class="card-footer d-flex flex-column ">
                        <p class="card-text small mb-0" >Kategori Barang</p>
                        <p class="card-title fw-bold lead" >Nama Barang Yang Ditampilkan </p>
                        <div class="mb-1">
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star align-self-start"></span>
                            <span class="fa fa-star align-self-start"></span>
                        </div>
                        <div class="d-flex">
                        <div>
                            <p class="card-text mb-0">Harga</p>
                            <p class="card-title" >$4000</p>
                        </div>
                            <a class="btn btn-danger ms-auto">
                                <i class="bi bi-bag-fill"></i>
                            </a>
                        </div>
                        

                        </div></a>
                    </div>
                </div>
                <!-- produk 8 -->
                <div class="col mb-5">
                    <div class="card">
                        <img src="../images/image 2.png" class="card-img-top" alt="...">
                        
                
                        <a href="#" ><div class="card-footer d-flex flex-column ">
                        <p class="card-text small mb-0" >Kategori Barang</p>
                        <p class="card-title fw-bold lead" >Nama Barang Yang Ditampilkan </p>
                        <div class="mb-1">
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star checked align-self-start"></span>
                            <span class="fa fa-star align-self-start"></span>
                            <span class="fa fa-star align-self-start"></span>
                        </div>
                        <div class="d-flex">
                        <div>
                            <p class="card-text mb-0">Harga</p>
                            <p class="card-title" >$4000</p>
                        </div>
                            <a class="btn btn-danger ms-auto">
                                <i class="bi bi-bag-fill"></i>
                            </a>
                        </div>
                        

                        </div></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
   



 <!-- card produk 1 -->
 

    


  




<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>