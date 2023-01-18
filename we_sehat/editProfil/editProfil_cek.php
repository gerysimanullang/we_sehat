<?php
session_start();

include "../koneksi.php";
    
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = validate($_POST['username']);
$email = validate($_POST['email']);
$pass = validate($_POST['pass']);
$id = validate($_POST['id']);

$sql = "UPDATE users
SET username = '$username', email = '$email', pass = '$pass'
WHERE id = $id;";

$result = mysqli_query($conn, $sql);

$_SESSION['username'] = $username;
$_SESSION['email'] = $email;
$_SESSION['id'] = $id;
$_SESSION['pass'] = $pass;

header("location: ../profil/profil.php?"); 

?>