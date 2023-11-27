

<?php
  require('../Koneksi/koneksi.php');
  $id_produk = $_GET['id'];
  $query = "select * from produk join kategori_produk on produk.id_kategori = kategori_produk.id_kategori where id_produk='$id_produk'";
  $result = mysqli_query($koneksi, $query);

  
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
  <div class="row"  >
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
        foreach($result as $row){
      ?>
      
      <div class="border-box">
        <div class="title">
          <div class="row title-deskripsi"> 
           <div class="col"> <?php echo $row['Nama_produk'] ?></div>
          </div>
          <div class="row title-deskripsi-harga" > 
            <div class="col"> <?php echo $row['Harga_produk'] ?></div>
          </div>
        </div>

        <div class="warna-ukuran">
        <!-- pemilihan warna -->
          <div class="row" style="padding: 2vh 3vh 2vh 0" > 
            <div class="col text-warna-ukuran" >Pilih Warna</div>
            <div class="scroll-warna-row" >
                <div class="scroll-warna-col ">
                  <img src="#" width="100%" alt="">
                </div>
                <div class="scroll-warna-col ">
                  <img src="#" width="100%" alt="">
                </div>
                <div class="scroll-warna-col ">
                  <img src="#" width="100%" alt="">
                </div>
                <div class="scroll-warna-col ">
                  <img src="#" width="100%" alt="">
                </div>
                <div class="scroll-warna-col ">
                  <img src="#" width="100%" alt="">
                </div>
                <div class="scroll-warna-col ">
                  <img src="#" width="100%" alt="">
                </div>
                <div class="scroll-warna-col ">
                  <img src="#" width="100%" alt="">
                </div>
            </div>
          </div>
        </div>
        <!-- akhir pemilihan warna  -->

        <!-- pemilihan ukuran -->
        <div class="row" style="padding: 0 3vh 3vh 0" > 
          <div class="col text-warna-ukuran">Pilih Ukuran</div>
          <div class="scroll-warna-row">
              <div class="scroll-warna-col ">
                <img src="#" width="100%" alt="">
              </div>
              <div class="scroll-warna-col ">
                <img src="#" width="100%" alt="">
              </div>
              <div class="scroll-warna-col ">
                <img src="#" width="100%" alt="">
              </div>
              <div class="scroll-warna-col ">
                <img src="#" width="100%" alt="">
              </div>
              <div class="scroll-warna-col ">
                <img src="#" width="100%" alt="">
              </div>
              <div class="scroll-warna-col ">
                <img src="#" width="100%" alt="">
              </div>
              <div class="scroll-warna-col ">
                <img src="#" width="100%" alt="">
              </div>
          </div>
        </div>
        <!-- akhir pemilihan ukuran -->
      

        <!-- deskripsi produk -->
        <div class="deskripsi" style=" padding:2vh 0 0 0; border-top: 1px solid rgba(0,0,0,.1);" >
          <div class="row deskripsi-judul-produk"  > 
           <div class="col"> Deskripsi</div>
          </div>
          <div class="row deskripsi-produk"  > 
            <div class="col"><p> <?php echo $row['deskripsi_produk'] ?></p></div> 
          </div>
          <div class="row deskripsi-judul-produk" style="padding: 1vh 0 0 0" > 
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
    <div class="col-md-5 left-card-jumlah">
        <div class="row title-deskripsi" style="padding: 0 0 2vh 0">
            <div class="col text-jumlah">Atur Jumlah: </div>
        </div>
        <div class="row">
            <div class="col d-flex">
                <a href="#" onclick="tambahJumlah()"><i class="bi bi-plus"></i></a>
                <span id="jumlah" class="angka-keranjang text-center">1</span>
                <a href="#" onclick="kurangiJumlah()"><i class="bi bi-dash"></i></a>
            </div>
            <script>
    var jumlah = 1; // Inisialisasi jumlah
    var stok = <?php echo $row['jumlah_produk'] ?>; // Ganti dengan jumlah stok yang sebenarnya

    function tambahJumlah() {
        if (jumlah < stok) {
            jumlah++;
            updateJumlah();
        } else {
            alert('Stok tidak mencukupi');
        }
    }

    function kurangiJumlah() {
        if (jumlah > 1) {
            jumlah--;
            updateJumlah();
        }
    }

    function updateJumlah() {
        document.getElementById('jumlah').innerText = jumlah;
    }
</script>
        <div class="col d-flex">
          <p>warna,</p>
          <p>ukuran</p>
        </div>
      </div>
      <div class="row d-flex">
        <div class="col d-flex">
           <p>stok :  <p><?php echo $row['jumlah_produk'] ?></p></p>
        </div>
        <div class="col ">
          <p>subtotal: -</p>
        </div>
      </div>
      <div class="row ">
      
                        <div class="col btn-masukan-keranjang"  >
                            <a value="Masukkan Keranjang" href="keranjang.php?id=<?php echo $row['id_produk'] ?>" name="">
                        </div>
                        <!-- button beli Sekarang -->
                        <div class="col  btn-beli-sekarang" >
                            <a type="submit" class="btn btn-outline-danger px-5 rounded-3" value="Beli Sekarang"href="checkout.php?id=<?php echo $row['id_produk'] ?>  name="">
                        </div>
                        <!-- akhir button profil -->
                    
      </div>
    </div>
    <!-- ulasan -->
    <div class="col-md-6 right-card-ulasan">
      <div class="row ulasan-title">
        <div class="col" style="font-size: 20px; font-weight:500;" >Ulasan <a href="#" style="color: #EE5151; font-size: 14px; font-family: Lexend; font-weight: 300; text-decoration: underline; word-wrap: break-word" >lihat semua</a></div>
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
                <div class="col d-flex justify-content-end"  style="color: #494949;font-size: 15px;font-family: Lexend;font-weight: 600;word-wrap: break-word" > 4.5/5 
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
                <div class="col d-flex justify-content-end"  style="color: #494949;font-size: 15px;font-family: Lexend;font-weight: 600;word-wrap: break-word" > 4.5/5 
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
                <div class="col d-flex justify-content-end"  style="color: #494949;font-size: 15px;font-family: Lexend;font-weight: 600;word-wrap: break-word" > 4.5/5 
                  <span class="fa fa-star checked"></span>
                </div>
              </div>
              <div class="row text-detail-ulasan">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos accusamus, sed ipsam iste quod nemo.</div>
            </div>
          
          </div>
      </div>
    </div>

  </div>














</div>

<!-- Js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>