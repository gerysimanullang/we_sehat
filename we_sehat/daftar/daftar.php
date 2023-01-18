<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="daftar.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php if (isset($_GET['error'])) { ?> 
            <p class="error"><?php echo $_GET['error']; ?></p> 
        <?php } ?> 

        <?php if (isset($_GET['success'])) { ?> 
            <p class="success"><?php echo $_GET['success']; ?></p> 
        <?php } ?>
        <div class="head">
            <h2 class="selamatDatang">Selamat Datang di Wesehat</h2>
        </div>
        <form action="daftar_cek.php" method="post">
            <input class="inputText" type="text" placeholder="Username" name="username" required>
            <input class="inputText" type="text" placeholder="Email" name="email" required>
            <input class="inputText" type="password" placeholder="Password" name="password" required>
            <input class="inputText" type="password" placeholder="Re-Password" name="re_password" required>
            <input class="submitLogin" type="submit" value="Daftar">
        </form>
        <div class="keDaftar">
            <p>Already have an account ?</p>
            <a href="../login/login.php">Login</a>
        </div>
    </div>
</body>
</html>