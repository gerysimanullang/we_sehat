<?php
session_start();
include "../koneksi.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);


    $sql = "SELECT * FROM users WHERE username='$username' AND pass='$password'";

    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['pass'] = $row['pass'];
        header("location: ../home/home.php");
        exit();
    }else{
        header("location: login.php?error=Incorrect Username or Password");
        exit();
    }

}else{
    header("location: login.php");
    exit();
}
?>