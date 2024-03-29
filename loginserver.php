<?php  //Start the Session
session_start();

$db = mysqli_connect("localhost", "root" , "", "gamingdb" ) or die ("could not connect");

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
 $inUsername = $_POST["username"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[]
 $inPassword = $_POST["password"];
 $stmt= $db->prepare("SELECT User_Name, Password FROM ur_users WHERE User_Name = ?"); //Fetching all the records with input credentials
 $stmt->bind_param("s", $inUsername); //bind_param() - Binds variables to a prepared statement as parameters. "s" indicates the type of the parameter.
 $stmt->execute();
 $stmt->bind_result($UsernameDB, $PasswordDB); // Binding i.e. mapping database results to new variables

 //Compare if the database has username and password entered by the user. Password has to be decrypted while comparing.
 if ($stmt->fetch() && password_verify($inPassword, $PasswordDB))
 {
 $_SESSION['username']=$inUsername; //Storing the username value in session variable so that it can be retrieved on other pages
   header("location: dashboard.php");// user will be taken to profile page
 }
 else
 {





 }}


?>
