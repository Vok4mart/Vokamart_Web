<?php

session_start();

    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- lin font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&family=Poppins:ital,wght@0,100;0,300;0,500;0,900;1,100&display=swap" rel="stylesheet">
    <!-- styleku -->
    <link rel="stylesheet" href="style.css">
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



<div class="card mb-3 border-0 mx-auto" style="max-width: 1140px;">
  <div class="row">
    <div class="offset-md-2 col-md-3 col-img">
    <div class="foto">
                <img src="../images/Frame 16.png" alt="" >
               
            </div>
    </div>
    <div class="col">
      <div class="card-body">
      <div class="boxs">
      <form action="#" method="POST">
                <div class="form-akun">
                    <div class="inputBox">
                        <span>Email</span>
                        <p>nama email</p>
                    </div>
                    <div class="inputBox">
                        <span>Username</span>
                        <p>nama username</p>
                    </div>
                    <div class="inputBox">
                        <span>Alamat <a href="list_alamat.php">ubah</a>
                        </span>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                    </div>
                    <div class="inputBox">
                        <span>No.Hp</span>
                        <p>no hp</p>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <div class="inputBx" >
                            <input type="submit" value="Daftar Transaksi" name="">
                        </div>
                        <!-- button ubah profil -->
                        <div class="inputBox " >
                            
                            <!-- Vertically centered modal -->
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" >Ubah profil</button>

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form>
                                      <div class="mb-3 inputku">
                                        <label type="email" for="recipient-name" class="col-form-label">Email</label>
                                        <div class=" d-flex" >
                                        <input type="text" class="form-control" id="recipient-name">
                                        <a href="lupapassword.php"><button type="button" class="btn btn-outline-danger">Ubah Password</button></a>
                                        </div>
                                      </div>
                                        <div class="mb-3">
                                          <label for="recipient-name" class="col-form-label">Username</label>
                                          <input type="text" class="form-control inputan" id="recipient-name">
                                        </div>
                                    
                                        <button type="button" class="btn btn-danger px-5 rounded-3">Simpan</button>
                                    </form>
                                  </div>
                              
                                </div>
                              </div>
                            </div>
                        </div>
                        <!-- akhir button profil -->
                    </div>
                </div>
            </form>
      </div>
      </div>
    </div>
  </div>
</div>




<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>