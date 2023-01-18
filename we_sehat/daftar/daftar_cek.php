<?php
session_start();
include "../koneksi.php";

if (isset($_POST['username']) && isset($_POST['password']) 
&& isset($_POST['email']) && isset($_POST['re_password'])) {
    echo "kontol";
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

	$re_password = validate($_POST['re_password']);
	$email = validate($_POST['email']);

	$user_data = 'username='. $username. '&email='. $email;

	if ($password !== $re_password) {
        header("location: signup.php?error=The Confirmation Password Doesn't Match&$user_data");
        exit();
    } else {
		$sql = "SELECT * FROM users WHERE username='$username' ";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) > 0) {
			header("location: daftar.php?error=The Username is already taken&$user_data");
        	exit();
		} else {
			$sql2 = "INSERT INTO users(username, pass, email) VALUES('$username', '$password', '$email')";
			$result2 = mysqli_query($conn, $sql2);
			if ($result2) {
			 	header("location: ../login/login.php?success=Your Account has Been Created");
        	 	exit();
			}else{
				header("location: signup.php?error=Unknown Error Occured&$user_data");
        		exit();
			}
		}
    }

}else{
    // header("location: ../login.php");   
    // exit();
}
?>