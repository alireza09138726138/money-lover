<?php 
  include("libs/smarty/Smarty.class.php");
include 'configg.php';
$result=false;
$fla=0;
$wrong_credentials=false;
 if(isset($_POST['username']) && isset($_POST['password'])){ 
 

     $username = mysqli_real_escape_string($conn, $_POST['username']);
	  $email = mysqli_real_escape_string($conn, $_POST['email']);
     $password = md5($_POST['password']); 
     $sql = mysqli_query($conn, "SELECT * FROM user WHERE username = '".$username."'");
     if(mysqli_num_rows($sql)>0){ 
         
		$fla=1;
     }else{ 
    $result = mysqli_query($conn, "INSERT INTO user(username, password, email) VALUES('$username', '$password', '$email')") or die (mysqli_error($conn)); 
	
		 }
 }

$smarty = new smarty();
		$smarty->assign('fla', $fla);
		$smarty->assign('wrong_credentials', $wrong_credentials);
		$smarty->assign('result', $result);
		$smarty->display("register.tpl"); 
 ?>
