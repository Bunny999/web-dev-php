<?php

session_start();


$errors = array();
// connect to  db

	$my_sql = mysqli_connect("localhost", "root" , "", "gamingdb" ) or die ("could not connect");

// registerusers
	if($_SERVER['REQUEST_METHOD'] == 'POST') {

							    $firstname = mysqli_real_escape_string($my_sql, $_POST['firstname']);
							 	$secondname = mysqli_real_escape_string($my_sql, $_POST['secondname']);
								$email = mysqli_real_escape_string($my_sql, $_POST['email']);
								$username =mysqli_real_escape_string($my_sql, $_POST['username']);
								$pass1 =mysqli_real_escape_string($my_sql, $_POST['password']);
								$pass2 =mysqli_real_escape_string($my_sql, $_POST['confirmpassword']);
 								$gender =mysqli_real_escape_string($my_sql, $_POST['gender']);
								$dob = mysqli_real_escape_string($my_sql, $_POST['DOB']);
								$secretword =mysqli_real_escape_string($my_sql, $_POST['secretword']);


// valid

// register

 		if(count($errors) == 0){

 										    $password = md5( $pass1);



 									$query = "INSERT INTO ur_users (DOB, Email, First_Name, Gender, Password, Second_Name, Secret_Word, User_Name) VALUES('$dob', '$email', '$firstname', '$gender', '$password', '$secondname', '$secretword', '$username')";


				 							    mysqli_query($my_sql, $query);

				 							    $_SESSION['message'] = 'Registration succesfull';
				 							    header("location: login.php");




 		}

}








































?>
