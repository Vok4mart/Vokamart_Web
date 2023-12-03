<?php
session_start();
require('../Koneksi/koneksi.php');

// Memastikan bahwa id_produk dan jumlahKeranjang tidak kosong
$id_produk = isset($_GET['id']) ? $_GET['id'] : null;
$jumlahKeranjang = isset($_POST['jumlah']) ? $_POST['jumlah'] : null;

if ($id_produk === null || $jumlahKeranjang === null) {
    die("ID Produk dan Jumlah harus disertakan");
}

// Ambil data produk dari database berdasarkan $id_produk
$query = "SELECT * FROM produk WHERE id_produk = ?";
$stmt = mysqli_prepare($koneksi, $query);

if ($stmt === false) {
    die("Error dalam persiapan statement");
}

mysqli_stmt_bind_param($stmt, "s", $id_produk);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$data_produk = mysqli_fetch_assoc($result);

if (!$data_produk) {
    die("Produk tidak ditemukan");
}

$stok_produk = $data_produk['stok'];

$jumlah = isset($_SESSION["keranjang"][$id_produk]) ? $_SESSION["keranjang"][$id_produk] : 1;

$produk_dalam_keranjang = isset($_SESSION['keranjang']) ? count($_SESSION['keranjang']) : 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/keranjang.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&family=Poppins:ital,wght@0,100;0,300;0,500;0,900;1,100&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg  mx-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">
                <img src="" alt="vokamart">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
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

    <div class="card mt-5">
        <div class="row">
            <div class="col-md-7 cart">
                <div class="col vertical-line"></div>
                <div class="form-check form-check-inline d-flex align-items-center">
                    <input class="form-check-input rounded-circle mb-3" type="checkbox" id="inlineCheckbox1" value="option1">
                    <div class="row main align-items-center card1 mx-2">
                        <div class="col-md-2 col-auto mx-2">
                            <img class="img-rounded" src="../images/<?php echo $data_produk['gbr_produk']; ?>" alt="Produk">
                        </div>
                        <div class="col">
                            <div class="row mb-2 text-produk"><?php echo $data_produk['deskripsi_produk']; ?></div>
                            <div class="row text-muted harga-produk"><?php echo $data_produk['harga_produk']; ?></div>
                        </div>
                        <div class="col d-flex align-items-end justify-content-end">
                            <a href="#" onclick="tambahJumlah('<?php echo $data_produk['id_produk']; ?>')">
                                <i class="bi bi-plus"></i>
                            </a>
                            <input type="number" name="jumlah" class="angka-keranjang text-center" value="<?php echo $jumlahKeranjang; ?>" min="1" max="<?php echo $stok_produk; ?>">
                            <a href="#" onclick="kurangJumlah('<?php echo $data_produk['id_produk']; ?>')">
                                <i class="bi bi-dash"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-5 belanja ms-auto">
        <div class="border-box">
            <div class="row text-rb">Ringkasan Belanja</div>
            <div class="row">
                <div class="col text-tb">Total Barang:</div>
                <div class="col text-right harga-barang" id="total_produk"><?php echo $produk_dalam_keranjang; ?></div>
            </div>
            <div class="row border-top pt-2">
                <div class="col text-tbel">Total Belanja:</div>
                <div class="col text-right harga-total" id="price2"><?php echo $produk_dalam_keranjang * $data_produk['harga_produk']; ?></div>
            </div>
            <form action="checkout.php" method="post">
                <input type="hidden" name="keranjang_data" value="<?php echo htmlspecialchars(json_encode($_SESSION['keranjang'])); ?>">
                <button type="submit" class="btn btn-danger">CHECKOUT</button>
            </form>
        </div>
    </div>

    <script>
        function updateTotal() {
            var jumlahBarang = parseInt(document.getElementsByName("jumlah")[0].value);
            document.getElementById("total_produk").innerText = jumlahBarang;
            var hargaBarang = <?php echo $data_produk['harga_produk']; ?>;
            document.getElementById("price2").innerText = jumlahBarang * hargaBarang;
        }

        window.onload = updateTotal;
        document.getElementsByName("jumlah")[0].addEventListener("input", updateTotal);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
