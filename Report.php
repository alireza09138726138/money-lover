<!DOCTYPE html>
<html lang="en">
<head>
  <title>Money lover</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="shortcut icon" href="wallet-with-american-money-300x200-1.jpg" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<!-- font-awesome for sidebar -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
                 <h3 align="center" style='color:gray;font-family: "Times New Roman", Times, serif;'>( EXPENDITURE TO CASH OR BANKY )</h3>
  
  

<div class="pull-right">
 <h3 style='color:blue' id='date'><?php $date=date("d-m-Y ");echo $date;?></h3>
	</div> 
	
	<div class="pull-left">
	<div class="well" style='border:1px solid hsl(0, 100%, 25%)' >
	<form class="form" action="#" method="post" name="calculator">
	
<table>

<tr>
<button name="submite" type="submit" class="button button5">Submit</button><br>
<th style='color:black;padding: 2px 1px;background-color:  lightgrey;'>&nbsp;&nbsp;Rrport to expenditure of kind:</th>

<?php 
 $connect = mysqli_connect("localhost", "root", "", "makharej"); 
$sql="SELECT DISTINCT Comment FROM produ WHERE !Price=''";
$result=mysqli_query($connect,$sql);
$serialnumber=0;
$counter=0;
while($row=mysqli_fetch_array($result))
{
$serialnumber++;
?> 
 
                    <tr>
                        
                 <th style='text-align:center;'><h2 class='h5'><span ><?php echo $row['Comment']; ?></span></h2>
				 <input type="radio" name="product" class="bank cell" id="product" value="<?php echo $row['Comment']; ?>" required >	</i>				
                 
				
                    </div> </th></tr>
 <?php 
$counter++;
 } 
 ?>
 
 </table>
</thead>
  </div>
  
  </div>
 </div>

</form>
   

 <?php 
 include 'configg.php';
	
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 

    if (isset($_POST['submite']))
 {       
	 
          
		  $result=0;
		   
			$product= mysqli_real_escape_string($conn,$_POST['product']);
			
		
$result=mysqli_query($conn,"SELECT * FROM produ WHERE Comment='".$product."';") or die(mysqli_error());
					if(mysqli_num_rows($result) >0 ) 
	 {
	$counter=0; ?>
	
	
	<div class="container">

    		<table class="table table-striped table-responsive" id="usersdata">
				<tr>
				     <th  id='th' style='text-align:center;color:;font-family: "Times New Roman", Times, serif;' class='th'><h3>Bank Name</h3></th> 
                    <th  id='th' style='text-align:center;color:;font-family: "Times New Roman", Times, serif;' class='th'><h3>Account</h3></th> 					 
    				<th  id='th' style='text-align:center;color:;font-family: "Times New Roman", Times, serif;' class='th'><h3>Product Name</h3></th>
    				<th  id='th' style='text-align:center;font-family: "Times New Roman", Times, serif;' class='th'><h3>Price($)</h3></th>
    				<th  id='th' style='text-align:center;font-family: "Times New Roman", Times, serif;' class='th'><h3>Amount</h3></th>
					<th  id='th' style='text-align:center;font-family: "Times New Roman", Times, serif;' class='th'><h3>Expenditure kind</h3></th>
					<th  id='th' style='text-align:center;font-family: "Times New Roman", Times, serif;' class='th'><h3>Date</h3></th>
					
				
    			</tr>
				
    		
			<style>
 .th{border-radius: 15px 50px 30px 5px;}
 .h4{padding: 2px 8px;}
 .p{ padding: 2px 8px;}
 </style>
			<?php while($row= mysqli_fetch_assoc($result)){ 
			
			?>
  
   <tr>
			<td style=' background-color: #ffd984;'><h4 style='text-align:center;color:blue;'><b><i><?php echo $row['bank'] ?></b></i></h4></td>  
			<td style=' background-color: #ffd984;'><h4 style='text-align:center;color:#994d00;'><b><i><?php echo $row['Account'] ?></b></i></h4></td>
    				<td style=' background-color: #ffffb7;'><h4 style='text-align:center;color:	#009973;'><b><i><?php echo $row['name'] ?></b></i></h4></td>
    			
    				<td style=' background-color: #ffffb7;'><p style='text-align:center;color:grey;font-size:19px'><b><?php echo $row['Price'] ?></b></p></td>
    				<td style=' background-color: #ffffb7;'><p style='text-align:center;color:Green;font-size:19px'><b><?php echo $row['amount'] ?></b></p></td>
				
					<td style=' background-color: #ffffb7;'> <p style='text-align:center;color:#ff9800;font-size:19px'><b><?php echo $row['Comment'] ?></b></p></td>
					<td style=' background-color: #ffffb7;'><p style='text-align:center;color:#000000;font-size:19px'><b><?php echo $row['year'] ?>-<?php echo $row['month'] ?>-<?php echo $row['day'] ?></b></p></td>
 </tr>
	          <?php
$counter++;}
 
                                
	$result = mysqli_query($conn,"SELECT sum(Price) FROM produ WHERE Comment='".$product."';") or die(mysqli_error());
    		while ($rows1 = mysqli_fetch_array($result)) {
    	?>
		<div class="pull-right">
    		<div class="span">
    			<div class="alert alert-success"><i class="icon-credit-card icon-large"></i>&nbsp;Total Price($):&nbsp;<span style='color:#990000';><b><i><?php echo $rows1['sum(Price)']; ?></b></i></span></div>
    		</div>
    	</div></div>
    	<?php 
  }}
 }
    
  }	
       ?>		
					
</tbody>
    	</table>
		
		
  <style type="text/css">
 body{   background-color: #808080;}
 .h5 {
  display: inline-block;
  border-radius: 4px;
  background-color:  lightgrey;
  border: none;
  color: grey;
  text-align: center;
 font-size:24px;
  padding: 2px;
  width: 100px;
  transition: all 0.01s;

  margin: 5px;
}
 
 .button {
    background-color: white; /* */
    border: none;
    color: black;
	border: 2px solid #555555;
    
    text-align: center;
    text-decoration: none;
    display: inline-block;
    
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
 

.button:hover {
    background-color: #555555;
    color: white;
}
table, th, td {
    border: none;
}
#th{
    background-color: #DCDCDC;
}

.btn {
  width:80%;height:40%;
  border: 1px solid black;
  color: black;
  margin: 1px;
  margin-right: 6px;
  font-size: 12px;
  opacity:.5
}
.btnd {
	width:80%;height:40%;
  border: 1px solid black;
  color: black;
  margin: 1px;
  margin-right: 2px;
  font-size: 12px;
  opacity:.5
}
.btnm {
	width:80%;height:40%;
  border: 1px solid black;
  color: black;
  margin: 1px;
  margin-right: 13px;
  font-size: 12px;
  opacity:.5
}

#a{
	padding: 5px 6px;
    text-align: left;
	text-decoration: none;
	
	background-color: light grey;
	border-radius: 2px;;
}
#a {
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.8s;
}
#a:hover {
    background-color: #4CAF50; /* Green */
    color: white;
}
#a {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
#span{
	color:#f4511e;

}
#span:hover{
	color:black;

}
@media only screen and (min-width: 47.9375px) and (max-width: 600px) {
	#a {
    font-size:10px
}
	.a1 {
    font-size:10px;position:relative;left:0px;
}
#date{
	font-size:10px
}	
}

.h4 {
  display: inline-block;
  border-radius: 4px;
  background-color:  lightgrey;
  border: none;
  color:  black;
  text-align: center;
  padding: 2px 2px;
  width: 100px;
  margin: 5px;
}
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


<script>
$(document).ready(function() {
  $('#plsme').fadeOut(10000); // 5 seconds x 1000 milisec = 5000 milisec
});
</script>
</body>
</html>
