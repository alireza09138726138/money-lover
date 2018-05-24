<!DOCTYPE html>
<html lang="en">
<head>
  <title>Money lover</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
    <!-- font-awesome for sidebar -->
	<link rel="shortcut icon" href="wallet-with-american-money-300x200-1.jpg" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

<script>
$(document).ready(function(){
    $(".btn1").click(function(){
        $("#table").hide();
		$("#table2").show();
		$("#table3").hide();
    });
    $(".btn2").click(function(){
        $("#table").show();
		 $("#table2").hide();
		 $("#table3").hide();
    });
	$(".btn3").click(function(){
        $("#table3").show();
		 $("#table2").hide();
		 $("#table").hide();
    });
});
</script>
<script type="text/javascript">
function showDiv(toggle){
document.getElementById(toggle).style.display = 'block';
}

function showDiv(toggle1){
document.getElementById(toggle1).style.display = 'block';
}

function showDiv(toggle2){
document.getElementById(toggle2).style.display = 'block';
}
</script>
<!-- header -->
<div class="jumbotron text-center" style='border:1px solid hsl(0, 100%, 25%)'>
  
<h3 align="center" style='color:black;font-family: "Times New Roman", Times, serif;'>Money lover</h3>
                 <h3 align="center" style='color:gray;font-family: "Times New Roman", Times, serif;'>( EXPENDITURE OF YEAR,MONTH,DAY )</h3>
  
  
<!-- show date -->
<div class="pull-right">
 <h3 style='color:blue' id='date'><?php $date=date("d-m-Y ");echo $date;?></h3>
	</div> 
	
	<!-- form to enter date -->
	<div class="pull-left">
	<div class="well" style='border:1px solid hsl(0, 100%, 25%)' >
	<form class="form" action="#" method="post" name="calculator">
	
	<thead>
<span style='color:#663399' class='h4'><b>YEAR:</b></span>
<input class="btn2" type="number" value=""  name="YEAR" placeholder="Enter YEAR" id='button' onclick="showDiv('toggle')"  style=' background-color: #ffd984;color:rgb(0, 0, 0); font-weight: bold;font-style: italic;'>





<span style='color:#663399' class='h4'> <b>MONTH:</b></span>
<input class="btn1" type="text" value="" name="MONTH" placeholder="Enter MONTH" onclick="showDiv('toggle1')" style=' background-color: #ffd984;color:rgb(0, 0, 0); font-weight: bold;font-style: italic;'>

<span style='color:#663399' class='h4'><b>DAY:</b></span>
<input class="btn3" type="text" value="" name="day" placeholder="Enter DAY" onclick="showDiv('toggle2')" style=' background-color: #ffd984;color:rgb(0, 0, 0); font-weight: bold;font-style: italic;'>
</thead>
<button name="submite" type="submit" class="button button5">Submit</button>

 <!-- numbers input -->
 <tbody >
 <tr>
 <div id="toggle" style="display:none">
				<th>
 <p><table border="2" id="table" cellpadding="4"  cellspacing="2" width="150" bgcolor="000000" >
 <th></th>
 <th>YEAR</th>
 <th></th>
<tr>
<td align="center">
<input type="button" value=" 7 " name="seven" onclick="document.calculator.YEAR.value+='7'">
</td>
<td align="center">
<input type="button" value=" 8 " name="eight" onclick="document.calculator.YEAR.value+='8'">
</td>
<td align="center">
<input type="button" value=" 9 " name="nine" onclick="document.calculator.YEAR.value+='9'">
</td>

</tr>
<tr>
<td align="center">
<input type="button" value=" 4 " name="four" onclick="document.calculator.YEAR.value+='4'">
</td>
<td align="center">
<input type="button" value=" 5 " name="five" onclick="document.calculator.YEAR.value+='5'">
</td>
<td align="center">
<input type="button" value=" 6 " name="six" onclick="document.calculator.YEAR.value+='6'">
</td>

</tr>
<tr>
<td align="center">
<input type="button" value=" 1 " name="one" onclick="document.calculator.YEAR.value+='1'">
</td>
<td align="center">
<input type="button" value=" 2 " name="two" onclick="document.calculator.YEAR.value+='2'">
</td>
<td align="center">
<input type="button" value=" 3 " name="three" onclick="document.calculator.YEAR.value+='3'">
</td>

</tr>
<tr>
<td align="center"  colspan="2">

<button class="btn" type="button" name="clear"  onclick="document.calculator.YEAR.value=''">CLEAR</button>
</td>

<td align="center">
<input type="button" value=" 0 " name="zero" onclick="document.calculator.YEAR.value+='0'">
</td>
</th>


</tr>
<th>
</table></p> 
  </div>
  
  
  <div id="toggle1" style="display:none">
  <p><table border="4" id="table2" cellpadding="2" bordercolor="#00000" cellspacing="2" width="150" bgcolor="000000">
<th></th>
 <th>MONTH</th>
 <th></th>
  <tr>
<td align="center">
<input type="button" value=" 7 " name="seven" onclick="document.calculator.MONTH.value+='7'">
</td>
<td align="center">
<input type="button" value=" 8 " name="eight" onclick="document.calculator.MONTH.value+='8'">
</td>
<td align="center">
<input type="button" value=" 9 " name="nine" onclick="document.calculator.MONTH.value+='9'">
</td>

</tr>
<tr>
<td align="center">
<input type="button" value=" 4 " name="four" onclick="document.calculator.MONTH.value+='4'">
</td>
<td align="center">
<input type="button" value=" 5 " name="five" onclick="document.calculator.MONTH.value+='5'">
</td>
<td align="center">
<input type="button" value=" 6 " name="six" onclick="document.calculator.MONTH.value+='6'">
</td>

</tr>
<tr>
<td align="center">
<input type="button" value=" 1 " name="one" onclick="document.calculator.MONTH.value+='1'">
</td>
<td align="center">
<input type="button" value=" 2 " name="two" onclick="document.calculator.MONTH.value+='2'">
</td>
<td align="center">
<input type="button" value=" 3 " name="three" onclick="document.calculator.MONTH.value+='3'">
</td>

</tr>
<tr>
<td align="center"  colspan="2">

<button class="btn btnm" type="button" name="clear"  onclick="document.calculator.MONTH.value=''">CLEAR</button>

</td>
<td align="center">
<input type="button" value=" 0 " name="zero" onclick="document.calculator.MONTH.value+='0'">
</td>



</tr>
</table></p> 
  </th>
  
  </div>
  
  
  <div id="toggle2" style="display:none">
  <table border="4" id="table3" cellpadding="2" bordercolor="#00000" cellspacing="2" width="150" bgcolor="000000">
<th></th>
 <th>DAY</th>
 <th></th>
  <tr>
<td align="center">
<input type="button" value=" 7 " name="seven" onclick="document.calculator.day.value+='7'">
</td>
<td align="center">
<input type="button" value=" 8 " name="eight" onclick="document.calculator.day.value+='8'">
</td>
<td align="center">
<input type="button" value=" 9 " name="nine" onclick="document.calculator.day.value+='9'">
</td>

</tr>
<tr>
<td align="center">
<input type="button" value=" 4 " name="four" onclick="document.calculator.day.value+='4'">
</td>
<td align="center">
<input type="button" value=" 5 " name="five" onclick="document.calculator.day.value+='5'">
</td>
<td align="center">
<input type="button" value=" 6 " name="six" onclick="document.calculator.day.value+='6'">
</td>

</tr>
<tr>
<td align="center">
<input type="button" value=" 1 " name="one" onclick="document.calculator.day.value+='1'">
</td>
<td align="center">
<input type="button" value=" 2 " name="two" onclick="document.calculator.day.value+='2'">
</td>
<td align="center">
<input type="button" value=" 3 " name="three" onclick="document.calculator.day.value+='3'">
</td>

</tr>
<tr>


<td align="center"  colspan="2">

<button class="btn btnd" type="button" name="clear"  onclick="document.calculator.day.value=''">CLEAR</button>

</td>
<td align="center">
<input type="button" value=" 0 " name="zero" onclick="document.calculator.day.value+='0'">
</td>
 </tr>
  </table> 
  </th>
  
  </div>
   </div>
    </div>
     </div>

</form>
   

 <?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 
	 if( empty( $_POST['YEAR'] ))
    
	{?>
<div class="container">

<p id='plsme' style='color:red;padding:0px 0px;color: white;border-radius:2px'>the <b><i>YEAR</b></i> is required!</p></div><?php }

    elseif (isset($_POST['submite']))
 {
	 
          $con = mysqli_connect("localhost", "root", "", "makharej")or die(mysqli_error());
		  $result=0;
            $YEAR= mysqli_real_escape_string($con,$_POST['YEAR']);
			$MONTH= mysqli_real_escape_string($con,$_POST['MONTH']);
			$day= mysqli_real_escape_string($con,$_POST['day']);
			 $result=mysqli_query($con,"select * from produ where Price IS NOT NULL AND year='".$YEAR."' AND month='".$MONTH."' and day='".$day."'") or die(mysqli_error());
					if(mysqli_num_rows($result) >0 ) 
	 {
	$counter=0; ?>
	
	<!-- table to show product -->
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
 
 
	$result = mysqli_query($con,"SELECT sum(Price) FROM produ where year='".$YEAR."' AND month='".$MONTH."' and day='".$day."'") or die(mysqli_error());
    		while ($rows1 = mysqli_fetch_array($result)) {
    	?>
		<div class="pull-right">
    		<div class="span">
    			<div class="alert alert-success"><i class="icon-credit-card icon-large"></i>&nbsp;Total Price($):&nbsp;<span style='color:#990000';><b><i><?php echo $rows1['sum(Price)']; ?></b></i></span></div>
    		</div>
    	</div>
	</div>
    	<?php 
  }}
 else {?>
 <h3 style='color:white ;' id='plsme'><i>ERROR</i> because your DATE n't exist</h3><?php }}
    
  }	
       ?>		
					
</tbody>
    	</table>
		
		
  <style type="text/css">
 body{   
 background-color: #808080;
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
