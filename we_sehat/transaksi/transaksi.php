<?php
session_start();
include "../koneksi.php";

$sql = "SELECT * FROM transaksi";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="transaksi.css">
    <title>Document</title>
</head>
<body>
    <div>
        <header>
            <div class="container1">
                <h1 class="logo">WeSehat</h1>
                <p class="dash">|</p>
                <h2 class="letak">Transaksi</h2>
            </div>
            <div class="container2">
                <nav class="navbar">
                    <a href="../home/home.php">Home</a>
                    <a href="../daftarObat/daftarObat.php">Daftar Obat</a>
                    <a href="../transaksi/transaksi.php">Transaksi</a>
                </nav>
                <a href="../profil/profil.php">
                    <div class="pp-container">
                        <h3><?= $_SESSION['username'] ?></h3>
                        <div class="pp"></div>
                    </div>
                </a>
            </div>
        </header>
        <?php if (isset($_GET['error'])) { ?> 
            <p class="error"><?php echo $_GET['error']; ?></p> 
        <?php } ?> 
    
        <?php if (isset($_GET['success'])) { ?> 
            <p class="success"><?php echo $_GET['success']; ?></p> 
        <?php } ?>
        <main>
            <div class="container3">
                <div class="jumlahTransaksi">
                    <h2>Jumlah Transaksi</h2>
                    <p>1</p>
                </div>
                <a href="../tambahTransaksi/tambahTransaksi.php">
                    <div class="keTambahTransaksi">Tambah Transaksi</div>
                </a>
            </div>
            <div class="container4">
                <h2 class="hDaftarTransaksi">Daftar Transaksi</h2>
                <hr>
                <table>
                    <thead>
                        <tr>
                            <th>Pembeli</th>
                            <th>Obat yang dibeli</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if(mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "
                                        <tr>
                                            <td>".$row['pembeli']."</td>
                                            <td>".$row['obat']."</td>
                                            <td>harga</td>
                                        </tr>
                                    ";
                                }
                            } else {
                                echo "<p>Obat masih kosong</p>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    <footer>
        <a href="#">Tentang Kami</a>
        <div class="nav2">
            <div class="navHome">
                <a href="#">Home</a>
            </div>
            <div class="navObat">
                <a href="#">Daftar Obat</a>
                <a href="#">Tambah Obat</a>
            </div>
            <div class="navTransaksi">
                <a href="#">Daftar Transaksi</a>
                <a href="#">Tambah Transaksi</a>
            </div>
            <div class="navProfil">
                <a href="#">Profil</a>
            </div>
        </div>
        <div class="hubungiKami">
            <div class="hubungiKami1">
                <h3>Email</h3>
                <p>admin@wesehat.com</p>
            </div>
            <div class="hubungiKami1">
                <h3>No Hp</h3>
                <p>081234567890</p>
            </div>
        </div>
    </footer>
</body>
</html>