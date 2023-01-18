<?php
session_start();
include "../koneksi.php";

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = validate($_POST['pembeli']);
$obat = validate($_POST['obatYangDibeli']);

$sql = "SELECT * FROM obat WHERE nama='$obat'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $harga = (int) $row['harga'];
    $sql2 = "INSERT INTO transaksi (pembeli, obat, harga) VALUES('$username', '$obat', '$harga')";
}
$result2 = mysqli_query($conn, $sql2);
if ($result2) {
    header("location: ../transaksi/transaksi.php?success=Transaksi Berhasil ditambahkan");
    exit();
}else{
    header("location: transaksi.php?error=Unknown Error Occured&$user_data");
    exit();
}
?>