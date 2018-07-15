<?php
include 'configg.php';
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['logged_in_user'];
// SQL Query To Fetch Complete Information Of User
$sql = mysqli_query($conn, "SELECT * FROM user WHERE username = '".$user_check."'");

$row = mysqli_fetch_assoc($sql);
$login_session =$row['username'];
$login_id =$row['id'];

?>



