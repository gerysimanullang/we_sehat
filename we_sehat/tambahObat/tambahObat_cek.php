<?php
session_start();
include "../koneksi.php";

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$namaObat = validate($_POST['namaObat']);
$mengobati = validate($_POST['mengobati']);
$harga = validate($_POST['harga']);

$sql = "SELECT * FROM obat WHERE nama='$namaObat' ";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    header("location: tambahObat.php?error=Obat tersebut sudah ada&$user_data");
    exit();
} else {
    $sql2 = "INSERT INTO obat (nama, mengobati, harga) VALUES('$namaObat', '$mengobati', '$harga');";
    $result2 = mysqli_query($conn, $sql2);
    if ($result2) {
        header("location: ../daftarObat/daftarObat.php?success=Obat tersebut berhasil dimasukkan");
        exit();
    }else{
        header("location: signup.php?error=Unknown Error Occured&$user_data");
        exit();
    }
}
?>