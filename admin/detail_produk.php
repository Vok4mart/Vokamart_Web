<?php
require('../Koneksi/koneksi.php');
session_start();
$id_produk = $_GET['id'];
$query = "select * from produk join kategori_produk on produk.id_kategori = kategori_produk.id_kategori where id_produk='$id_produk'";
$result = mysqli_query($koneksi, $query);


// Logika untuk mendapatkan dan menyimpan data yang dipilih ke dalam session
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Misalnya, ambil ID produk dari form
  $id_produk_dipilih = $_POST['id_produk'];

  // Simpan ID produk ke dalam session (anda dapat menyimpan informasi lainnya juga)
  $_SESSION['keranjang'][$id_produk_dipilih] = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- style bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- link font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend&family=Poppins:ital,wght@0,100;0,300;0,500;0,900;1,100&display=swap" rel="stylesheet">
  <!-- link icon bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- icon bintang -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="../css/detail_produk.css">
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










  <div class="card">
    <div class="row">
      <!-- sisi kiri card gambar produk -->
      <div class="col-md-5  left-card-img ">

        <!-- card keranjang 1 -->
        <!-- gambar single yang besar -->
        <img src="../images/image 2.png" class="img-single" width="100%" alt="">
        <!-- gambar slider kecil -->
        <div class="small-img-row ">
          <div class="small-img-col ">
            <img src="../images/image 2.png" width="100%" alt="">
          </div>
          <div class="small-img-col ">
            <img src="../images/image 2.png" width="100%" alt="">
          </div>
          <div class="small-img-col ">
            <img src="../images/image 2.png" width="100%" alt="">
          </div>
          <div class="small-img-col ">
            <img src="../images/image 2.png" width="100%" alt="">
          </div>
          <div class="small-img-col ">
            <img src="../images/image 2.png" width="100%" alt="">
          </div>
          <div class="small-img-col ">
            <img src="../images/image 2.png" width="100%" alt="">
          </div>
          <div class="small-img-col ">
            <img src="../images/image 2.png" width="100%" alt="">
          </div>



        </div>
        <!-- akhir card keranjang 1 -->
      </div>



      <!-- sisi kanan card deskripsi -->
      <div class="col-md-6 right-card-deskripsi">
        <!-- card  -->
        <?php
        foreach ($result as $row) {
        ?>

          <div class="border-box">
            <div class="title">
              <div class="row title-deskripsi">
                <div class="col"> <?php echo $row['Nama_produk'] ?></div>
              </div>
              <div class="row title-deskripsi-harga">
                <div class="col"> <?php echo $row['Harga_produk'] ?></div>
              </div>
            </div>




            <!-- deskripsi produk -->
            <div class="deskripsi" style=" padding:2vh 0 0 0; border-top: 1px solid rgba(0,0,0,.1);">
              <div class="row deskripsi-judul-produk">
                <div class="col"> Deskripsi</div>
              </div>
              <div class="row deskripsi-produk">
                <div class="col">
                  <p> <?php echo $row['deskripsi_produk'] ?></p>
                </div>
              </div>
              <div class="row deskripsi-judul-produk" style="padding: 1vh 0 0 0">
                <div class="col"> Kategori Produk</div>
                <p> <?php echo $row['nama_kategori'] ?></p>
              </div>
            </div>


            <!-- akhir card total belanja -->
          </div>
        <?php
        }
        ?>
      </div>

    </div>



    <!-- row atur jumlah dan ulasan -->
    <div class="row flex-column-reverse flex-md-row">
      <!-- atur jumlah -->
      <form action="keranjang.php?id=<?php echo $row['id_produk']; ?>" method="post">
        <div class="col-md-5 left-card-jumlah">
          <div class="row title-deskripsi" style="padding: 0 0 2vh 0">
            <div class="col text-jumlah">Atur Jumlah: </div>
          </div>
          <div class="row">
            <div class="col d-flex">

              <input type="number" min="1" class="angka-keranjang text-center" name="jumlah"></input>

            </div>




          </div>
          <div class="row d-flex">
            <div class="col d-flex">
              <p>stok :
              <p><?php echo $row['jumlah_produk'] ?></p>
              </p>
            </div>
            <div class="col ">
              <p>subtotal: -</p>
            </div>
          </div>
          <div class="row ">

            <div class="col btn-masukan-keranjang">
              <button type="submit" name="submit" class="btn btn-primary">Masukkan Keranjang</button>
            </div>

            <!-- Button Beli Sekarang -->
            <div class="col btn-beli-sekarang">
              <a href="beli.php?id=<?php echo $row['id_produk']; ?>" class="btn btn-outline-danger px-5 rounded-3" role="button">Beli Sekarang</a>
            </div>

            <!-- akhir button profil -->

          </div>
        </div>
        <!-- ulasan -->
        <div class="col-md-6 right-card-ulasan">
          <div class="row ulasan-title">
            <div class="col" style="font-size: 20px; font-weight:500;">Ulasan <a href="#" style="color: #EE5151; font-size: 14px; font-family: Lexend; font-weight: 300; text-decoration: underline; word-wrap: break-word">lihat semua</a></div>
            <div class="col d-flex justify-content-end"> 4.5/5
              <span class="fa fa-star checked"></span>
            </div>
          </div>
          <div class="box-detail-ulasan">
            <div class="row main align-items-center ">
              <div class="col col-auto  mx-2 d-flex align-items-center">
                <img class="img-rounded-and-smaller" src="../images/1.jpeg">
              </div>
              <div class="col d-flex flex-column">
                <div class="row mb-2" style="color: #494949; font-size: 20px; font-family: Lexend;font-weight: 500;word-wrap: break-word">
                  Margaret
                  <div class="col d-flex justify-content-end" style="color: #494949;font-size: 15px;font-family: Lexend;font-weight: 600;word-wrap: break-word"> 4.5/5
                    <span class="fa fa-star checked"></span>
                  </div>
                </div>
                <div class="row text-detail-ulasan">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos accusamus, sed ipsam iste quod nemo.</div>
              </div>

            </div>
            <div class="row main align-items-center ">
              <div class="col col-auto  mx-2 d-flex align-items-center">
                <img class="img-rounded-and-smaller" src="../images/1.jpeg">
              </div>
              <div class="col d-flex flex-column">
                <div class="row mb-2" style="color: #494949; font-size: 20px; font-family: Lexend;font-weight: 500;word-wrap: break-word">
                  Margaret
                  <div class="col d-flex justify-content-end" style="color: #494949;font-size: 15px;font-family: Lexend;font-weight: 600;word-wrap: break-word"> 4.5/5
                    <span class="fa fa-star checked"></span>
                  </div>
                </div>
                <div class="row text-detail-ulasan">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos accusamus, sed ipsam iste quod nemo.</div>
              </div>

            </div>
            <div class="row main align-items-center ">
              <div class="col col-auto  mx-2 d-flex align-items-center">
                <img class="img-rounded-and-smaller" src="../images/1.jpeg">
              </div>
              <div class="col d-flex flex-column">
                <div class="row mb-2" style="color: #494949; font-size: 20px; font-family: Lexend;font-weight: 500;word-wrap: break-word">
                  Margaret
                  <div class="col d-flex justify-content-end" style="color: #494949;font-size: 15px;font-family: Lexend;font-weight: 600;word-wrap: break-word"> 4.5/5
                    <span class="fa fa-star checked"></span>
                  </div>
                </div>
                <div class="row text-detail-ulasan">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos accusamus, sed ipsam iste quod nemo.</div>
              </div>

            </div>
          </div>
        </div>
      </form>

    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>