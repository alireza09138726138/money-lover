<!DOCTYPE html>
<html>
<head>
    <title>Money lover</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <!-- font-awesome for sidebar -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="shortcut icon" href="wallet-with-american-money-300x200-1.jpg" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="http://www.phpzag.com/demo/delete-records-with-bootstrap-confirm-modal-using-php-mysql/script/bootbox.min.js"></script>
<body>



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



<div class="jumbotron text-center" style='border:1px solid hsl(0, 100%, 25%)'>
                <h3 align="center" style='color:black;font-family: "Times New Roman", Times, serif;'>Money lover</h3>
                 <h3 align="center" style='color:gray;font-family: "Times New Roman", Times, serif;'>( EXPLAIN )</h3>				
               <!-- show date in header -->
             <div class="pull-right">
              <h3 style='color:blue' id='date'><?php $date=date("d-m-Y ");echo $date;?></h3>
			  </div>
			  </div>
			  
			 <div class="">
                <h3 align="left" style='color:black;font-family: "Times New Roman", Times, serif;'>Home:</h3>
              		<p style='color:white;'>Home is first page<p><hr>	
              <h3 align="left" style='color:black;font-family: "Times New Roman", Times, serif;'>Creat password:</h3>
              		<p style='color:white;'>in this page you can make username and password till any one enter to your program<p><hr>
					<h3 align="left" style='color:black;font-family: "Times New Roman", Times, serif;'>Creat new account:</h3>
              		<p style='color:white;'>in this page you can enter new bank whit account for detertain of cost<p><hr>
					 <h3 align="left" style='color:black;font-family: "Times New Roman", Times, serif;'>Cost management(buy):</h3>
              		<p style='color:white;'>after enter new cost in (Creat new account) you can write new of buy (Product Name,Amount,Price,...)<p>
					<p style='color:white;'><span style='color:orange;'>notice: </span> even you can detertain of percent in bellow modal this percent is second detertain then to cost for one case of buy...this percent is different of limit that you enter cost update page</p><hr>
					<h3 align="left" style='color:black;font-family: "Times New Roman", Times, serif;'>Expenditure of year :</h3>
              		<p style='color:white;'>in this page you can see Expenditure of year and just enter date <p><hr>
					<h3 align="left" style='color:black;font-family: "Times New Roman", Times, serif;'>Expenditure of year,month:</h3>
              		<p style='color:white;'>in this page you can see Expenditure of year and just enter date(year,month)<p><hr>
					<h3 align="left" style='color:black;font-family: "Times New Roman", Times, serif;'>Expenditure of year,month,day:</h3>
              		<p style='color:white;'>in this page you can see Expenditure of year and just enter date(year,month,day)<p><hr>
					<h3 align="left" style='color:black;font-family: "Times New Roman", Times, serif;'>Cost update (report of last bound to cost):</h3>
              		<p style='color:white;'>in this page you can update Expenditure of cost and detertain limit(%?)<p><hr>
					 <h3 align="left" style='color:black;font-family: "Times New Roman", Times, serif;'>Expenditure of between times:</h3>
              		<p style='color:white;'>in this page you can see Expenditure between times<p><hr>
					<h3 align="left" style='color:black;font-family: "Times New Roman", Times, serif;'>Expenditure of between times with product name:</h3>
              		<p style='color:white;'>in this page you can see Expenditure between times with product name...<p><hr>
					<h3 align="left" style='color:black;font-family: "Times New Roman", Times, serif;'>Report to expenditure of kind:</h3>
              		<p style='color:white;'>in this page you can see Expenditure white Report to expenditure of kind(cash or banky)<p><hr>
					<h3 align="left" style='color:black;font-family: "Times New Roman", Times, serif;'>Report to expenditure of kind:</h3>
              		<p style='color:white;'>in this page you can enter Check(Bank Name,Person Name,Check Number,Mony Amount,Check Kind,Spend,Comment,Pay date,Alarm Pay date)<p>
					<p style='color:white;'><span style='color:orange;'>Alarm Pay date: </span> you can choose a date before time of check pass</p>
           
			  </div>
			  <style>
  
 body{   background-color: #808080;}
 
 </style>
 
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