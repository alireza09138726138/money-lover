
	<!DOCTYPE html>
<html lang="en">
<head>
  <title>Money lover</title>
  
  <meta charset="utf-8">
  <link rel="shortcut icon" href="pexels-photo-221174.png.jpg" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="wallet-with-american-money-300x200-1.jpg" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- font-awesome for sidebar -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


 <body class='bgimg'>
<script>
$(document).ready(function(){
    
        $("#p").hide();
});
</script>

 <style>
.bgimg {
    background-position: cover;
    background-size: 100% 100%;
    background-image: url("cash_and_gold-300x239-1.jpg");
    min-height: 100%;
	   box-shadow: inset 0 0 0 10000px rgba(0.7, 0.9, 0.9, 0.19);
}
</style>
 
<?php
$con = mysqli_connect("localhost", "root", "", "makharej"); 

 $sql = "SELECT * FROM user WHERE username IS NOT NULL";  
                    $query =  mysqli_query($con, $sql);
                    $rows = mysqli_num_rows($query);
                    if($rows>0)
                    {
		  ?>
		  <div class="well"  id='table'>
		 
<!-- form (if passord is exist) -->
 
 <form action="" method="post" name="Login_Form" onsubmit="return validateForm(this);">
  
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h2 style='color:red'><b><i>&nbsp;&nbsp;money lover</i></b></h2><h3 style='color:brown'> please enter Username & Password</h3></td><br>
    </tr>
    <tr>
      <td align="right" valign="top" ><span style='background-color:lightgrey;padding:2px 2px;;border-radius:2px;color:black'><b>Username:</b></span></td>
      <td><input name="username" type="text" class="Input" style='background-color:yellow;font-weight:bold;color:blue;'></td>
    </tr>
    <tr>
      <td align="right" style='background-color:lightgrey;padding:2px 2px;'><span style='background-color:lightgrey;padding:2px 2px;border-radius:2px;color:black'><b>Password:</b></span></td>
      <td><input name="password" type="password" id="p1" class="Input" style='background-color:yellow;font-weight:bold;color:blue;'></td>
    </tr>
    <tr>
      <td> </td>
      <td><button name="submite" class='submite' id="btnClick" type="submit" onclick="CountFun();" style='background-color:lightgrey;padding:2px 9px;border-radius:10px;color:black'><b>Submit</b></button> </td>
    </tr>
  </table>
</form>
 </div></div>

 
<header class="bgimg w3-display-container w3-grayscale-min"id='p'  id="home">

<span class="w3-button w3-xxlarge  w3-right" style='color:white' onclick="w3_open()"><i class="fa fa-bars"></i></span> 

<!-- Sidebar -->
<nav class="w3-sidebar w3-black w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-black w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a href="home.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3><i class="fa fa-home" style="font-size:18px;color:red">&nbsp;&nbsp;Home</i></h3></a>
	<a href="explain.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Explain</h3></a>
    <a href="Username.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3><i class="fa fa-key" style="font-size:18px;color:red">&nbsp;&nbsp;Creat password</i></h3></a>
	<a href="account.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Creat new account</h3></a>
    <a href="buy.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Cost management(buy)</h3></a>
    <a href="year.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3><i class="fa fa-calendar-check-o" style="font-size:18px;color:red">&nbsp;&nbsp;Expenditure of year </i></h3></a>
	<a href="month.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Expenditure of year,month </h3></a>
	<a href="day.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Expenditure of year,month,day </h3></a>
	<a href="update.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Cost update (report of last bound to cost)</h3></a>
	<a href="times.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Expenditure of between times</a>
	<a href="Expenditure.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Expenditure of between times with product name</h3></a>
	<a href="Report.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Report to expenditure of kind</h3></a>
	<a href="Check.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Check management</h3></a>
  </div>
</nav>


  
  <div class="w3-display-middle w3-center c" >
    <span class="w3-text-white w3-jumbo w3-animate-top" style="font-size:90px;font-family:weight"><b>MONEY<br>LOVER</b></span>
  </div>
  
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white"><h3 style='color:white' id='date'><?php $date=date("d-m-Y ");echo $date;?></h3></span>
  </div>
</header>

<script>
// Open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.width = "100%";
    document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
  
  
  <style>

body, html {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
	background-color:black;
	    overflow-y: hidden;
}

.menu {
    display: none;
}
.c{
	border-bottom: 5px solid white;
	}
</style>

<?php
 if (isset($_POST['submite']))
 {
$db= mysqli_connect("localhost", "root", "", "makharej");
 $username= mysqli_real_escape_string($db,$_POST['username']);
 $password= mysqli_real_escape_string($db,$_POST['password']);
 
  if($_POST['username']=='')
	{?>
<div class="container">

<h1 id='plsme' style='color:red;padding:0px 0px;color: white;border-radius:2px'>the <b><i>username</b></i> is required!</h1></div>

<?php }
 
 
  else if($_POST['password']=='')
	{?>
<div class="container">

<h1 id='plsme' style='color:red;padding:0px 0px;color: white;border-radius:2px'>the <b><i>password</b></i> is required!</h1></div>

<?php }

else{
	
	 $result=mysqli_query($db,"select * from user where username='".$username."' and password='".$password."'") or die(mysqli_error());
	  $rows3 = mysqli_num_rows($result);
	if($rows3>0) 
	 {
		
		 ?>
		 <!-- hide for form after right password -->
		 <script>
$(document).ready(function(){
 
        $('#table').hide();
		
	 $("#p").show();
		
       });
	</script>
		 <?php
	 
	 }else {
		 echo "<h1 id='plsme' style='color:red;padding:0px 0px;color: white;border-radius:2px'>the <b><i>fill</b></i> is wrong....please more care!</h1>";
		 }
       }
	}
}
					
					else{
	
	?>

<!-- if password not exist -->
<body>



<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">

<!-- Sidebar -->
<nav class="w3-sidebar w3-black w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-black w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a href="login69.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Home</h3></a>
    <a href="password.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Creat password</h3></a>
	<a href="login48.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Creat new account</h3></a>
    <a href="buy.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Cost management(buy)</h3></a>
    <a href="year.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Expenditure of year </h3></a>
	<a href="month.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Expenditure of year,month </h3></a>
	<a href="day.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Expenditure of year,month,day </h3></a>
	<a href="update.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Cost update (report of last bound to cost)</h3></a>
	<a href="times.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Expenditure of between times</a>
	<a href="Expenditure.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Expenditure of between times with product name</h3></a>
	<a href="Report.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Report to expenditure of kind</h3></a>
	<a href="Check.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Check management</h3></a>
  </div>
</nav>


<span class="w3-button w3-xxlarge  w3-right" style='color:white' onclick="w3_open()"><i class="fa fa-bars"></i></span> 


  
  <div class="w3-display-middle w3-center c" >
    <span class="w3-text-white w3-jumbo w3-animate-top" style="font-size:90px;font-family:weight"><b>MONEY<br>LOVER</b></span>
  </div>
  
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white"><h3 style='color:white' id='date'><?php $date=date("d-m-Y ");echo $date;?></h3></span>
  </div>
</header>


<script>
// Open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.width = "100%";
    document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>


<style>

body, html {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
	background-color:black;
}
.bgimg {
    background-position: cover;
    background-size: 100% 100%;
    background-image: url("cash_and_gold-300x239-1.jpg");
    min-height: 100%;
	  box-shadow: inset 0 0 0 10000px rgba(0.7, 0.9, 0.9, 0.19);
}
.menu {
    display: none;
}
.c{
	border-bottom: 5px solid white;
	}
</style>
<?php
					}
 ?>
