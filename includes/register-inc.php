<?php
session_start();

if(isset($_POST['submit'])) {
	//include database file
	include_once 'dbh.php';

	//Get data from the form
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	// Error Handlers
	// Check for empty Fields
	if(empty($email) || empty($uid) || empty($pwd) ){
		header("Location: ../register.php?signup=empty");
		exit();

	} else {
		// Check if email is valid
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			header("Location: ../register.php?signup=email");
			exit();
		} else {
			// Check if username is already taken
			$sql = "SELECT * FROM users WHERE user_uid = '$uid' ";
			$results = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($results);

			if($resultCheck > 0 ) {
				header("Location: ../register.php?signup=usertaken");
				exit();
			} else {
				// Check the password is correct
				//Hashing the password
				$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
				$_SESSION['email'] = $email;
				// Insert the user into the database
				$sql = "INSERT INTO users ( user_email, user_uid, user_pwd) VALUES ('$email', '$uid', '$hashedPwd');";
				mysqli_query($conn, $sql);
				header("Location: ../accountSetup.php?signup=success");
				exit();
			}
		}
	}
} else {
	header("Location: ../register.php");
	exit();
}