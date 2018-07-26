<?php

session_start();
if(isset($_POST['submit'])) {
	//include database file
include_once 'dbh.php';	

	//Get data from the form
	$age = $_POST['age'];
	$weight = $_POST['weight'];
	$height = $_POST['height'];

	// Error Handlers
	// Check for empty Fields
	if(empty($age)|| empty($weight)|| empty($height)){
		header("Location: ../AccountSetup.php?accountset=empty");
		exit();

	} else {
		$file = $_FILES['file'];
	
		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));
		//type of file to be uploaded
		$allowed = array('jpg', 'jpeg', 'png');
		//check if the file is allowed to uploaded
		if(in_array($fileActualExt, $allowed)){
			if($fileError===0){
				if($fileSize < 1000000){
					//Prevent file from being erased if a file with same name is uploaded
					$fileNameNew = uniqid('', true).".".$fileActualExt;
					//Storing file in a root folder
					$fileDestination = 'profile/'.$fileNameNew;
					//move file to the set location
					move_uploaded_file($fileTmpName, $fileDestination);
					$profileimage = (string)$fileDestination;
					//calculate bmi
					$x = ($height/100)*$height/100;
					$bmi = round($weight/$x,2);
					//get email
					$email = $_SESSION['email'];
					// Insert the extra details into the database
					$sql = "UPDATE users SET user_age = '$age', user_weight = '$weight', user_height = '$height', user_bmi = '$bmi', profile ='$profileimage' WHERE user_email = '$email' ";

					mysqli_query($conn, $sql);
					header("Location: ../login.php?accountset=success");
					exit();
				}else{
					header("Location: ../AccountSetup.php?accountset=filetoobig");
				}
			}else{
				header("Location: ../AccountSetup.php?accountset=invalidfiletype");
			}
		}else{
			header("Location: ../AccountSetup.php?accountset=invalidfile");
		}
	}
} else {
	header("Location: ../AccountSetup.php");
	exit();
}