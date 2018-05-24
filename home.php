

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Money lover</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="pexels-photo-221174.png.jpg" />
 <!-- font-awesome for sidebar -->
 <link rel="shortcut icon" href="pexels-photo-221174.png.jpg" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">




<body>
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" >

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

 <!-- font-awesome for sidebar -->
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