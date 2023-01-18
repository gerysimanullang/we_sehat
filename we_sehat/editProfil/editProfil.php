<?php
session_start()

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editProfil.css">
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
                        <h3>Asep</h3>
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
                    <form action="editProfil_cek.php" method="POST">
                        <table>
                            <tr>
                                <td>
                                    <label for="username">Nama</label>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="text" name="username" id=""
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="email">Email</label>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="text" name="email" id="" 
                            </tr>
                            <tr>
                                <td>
                                    <label for="pass">Password</label>
                                </td>
                                    <td>:</td>
                                <td>
                                    <input type="text" name="pass" id="" 
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="hidden" name="id" value="<?=$_SESSION['id']?>"></td>
                                <td><input type="submit" value="Ubah"></td>
                            </tr>
                        </table>
                    </form>
            </div>
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