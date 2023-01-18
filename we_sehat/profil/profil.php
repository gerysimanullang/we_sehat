<?php
session_start()

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profil.css">
    <title>Document</title>
</head>
<body>
    <div class="">
        <header>
            <div class="container1">
                <h1 class="logo">WeSehat</h1>
                <p class="dash">|</p>
                <h2 class="letak">Profil</h2>
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
        <main>
            <?php if (isset($_GET['error'])) { ?> 
                <p class="error"><?php echo $_GET['error']; ?></p> 
            <?php } ?> 
    
            <?php if (isset($_GET['success'])) { ?> 
                <p class="success"><?php echo $_GET['success']; ?></p> 
            <?php } ?>
            <div class="container3">
                <h2 class="title">Profil</h2>
                <hr>
                <table>
                    <tr>
                        <td>
                            Nama
                        </td>
                        <td>:</td>
                        <td>
                            <?= $_SESSION['username'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>:</td>
                        <td>
                            <?= $_SESSION['email'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password
                        </td>
                            <td>:</td>
                        <td>
                            <?= $_SESSION['pass'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><a href="../editProfil/editProfil.php">Edit Profil</a></td>
                    </tr>
                </table>
            </div>
            <a class="logout" href="../login/login.php">Log Out</a>
        </main>
    </div>
    <footer>
        <a href="../tentangKami/tentangKami.php">Tentang Kami</a>
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