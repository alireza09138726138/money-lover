
<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['logged_in_user'])){
header("location: home.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Money lover</title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="assets/style/stylee.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="assets/style/picture/pexels-photo-221174.png.jpg"/>
</head>
<body id="body">



<center>
    <h3 class="colorwhite font">Money lover</h3>
 </center>


 <fieldset>

<form action="" method="post">
 <dl>
			<dt>UserName :</dt>
				<dd>
<input id="fname" name="username" placeholder="username" type="text"></dd>
		</dl>
		
		<dl>
			<dt>Password :</dt>
				<dd>
<input id="fname" name="password" placeholder="password" type="password"></dd>
		</dd>
		</dl> 
<input name="submit" type="submit" value=" Login " class=' Login'>

  </form>
  
  <p>Don't have an account? <a href="register.php" style='color:red'>Register</a></p>
  <p>Do you want reset password? <a href="change.php" style='color:red'>reset</a></p>
 </fieldset>


</body>
</html>
