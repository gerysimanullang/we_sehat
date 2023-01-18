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

$id_hapus = validate($_POST['id_hapus']);

$sql = "DELETE FROM obat
WHERE id=$id_hapus;";
$result = mysqli_query($conn, $sql);

header("location: ../daftarObat/daftarObat.php");
exit();

?>