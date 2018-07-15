<?php
include 'configg.php';
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$sql = mysqli_query($conn, "SELECT * FROM user WHERE username = '".$user_check."'");

$row = mysqli_fetch_assoc($sql);
$login_session =$row['username'];
$login_id =$row['id'];
if(!isset($login_session)){
mysqli_close($conn); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>



