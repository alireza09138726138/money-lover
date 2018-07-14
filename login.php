<?php
session_start(); // Starting Session   
$error=''; // Variable To Store Error Message  password
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
include 'configg.php';
 $username = mysqli_real_escape_string($conn, $_POST['username']);
     $password =  md5($_POST['password']);
// Selecting Database
 $sql = mysqli_query($conn, "SELECT * FROM user WHERE username = '".$username."' and password = '".$password."'");

if($rows =mysqli_num_rows($sql)>0){
$_SESSION['login_user']=$username; // Initializing Session
header("location: home.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}
}
?>

