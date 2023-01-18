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

$id_edit = validate($_POST['id_edit']);

$namaObat = validate($_POST['namaObat']);
$mengobati = validate($_POST['mengobati']);
$harga = validate($_POST['harga']);

$sql = "UPDATE obat
SET nama = '$namaObat', mengobati = '$mengobati', harga = $harga
WHERE id=$id_edit; ";
$result = mysqli_query($conn, $sql);

header("location: ../daftarObat/daftarObat.php");
exit();

?>