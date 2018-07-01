<?php

include("libs/smarty/Smarty.class.php");
include 'configg.php';

$date = date("d-m-Y ");
$resultt =null;
$honest_credentials = false;
$wrong_credentials = false;
$valid = true;

if(isset($_POST['submit']))
	{
	$usrnm = mysqli_real_escape_string($conn, $_POST['usrnm']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
    $psw = mysqli_real_escape_string($conn, $_POST['psw']);
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $valid = false;
        
        $email = "";
    }else{
    $result = mysqli_query($conn, "select * from login where usrnm='" . $usrnm . "' and email='" . $email . "' and psw='" . $psw . "'") or die(mysqli_error ($result));
    $wrong_credentials = mysqli_num_rows($result) > 0;
	
	if(!$wrong_credentials>0){
	
	$resultt=mysqli_query($conn,"insert into login(usrnm,email,psw)values('$_POST[usrnm]','$_POST[email]','$_POST[psw]')");
	 }
	}
  }

$smarty = new smarty();
$smarty->assign('date', $date);
$smarty->assign('valid', $valid);
$smarty->assign('honest_credentials', $honest_credentials);
$smarty->assign('wrong_credentials', $wrong_credentials);
$smarty->assign('resultt', $resultt);
$smarty->display("register.tpl");
?>




