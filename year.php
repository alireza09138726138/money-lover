<!DOCTYPE html>
<html lang="en">
<head>
  <title>Money lover</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="picture/pexels-photo-221174.png.jpg"/>
  <?php
include("assets/asset link,script/asset.php");
 include("assets/sidebar/sidebar.php");
include("headerr.php");
?>
	</head>
	
<body style=' background-color: #808080;'>
<div class="container">
 <div class="row">
            
   <center>
   <h3 style='color:white;font-family: "Times New Roman", Times, serif;'>( EXPENDITURE OF YEAR )</h3>
    </center>  
      </div>
	
	
	    <!-- form -->
	<div class="pull-left">
	<div class="well" style='border:1px solid hsl(0, 100%, 25%)' >
	<form class="form" action="#" method="post" name="calculator">
	<thead>
<span style='color:#663399' ><b>YEAR:</b></span>
<input class="btn2" type="number" value=""  name="YEAR" placeholder="Enter YEAR" id='button' onclick="showDiv('toggle')" style=' background-color: #ffd984;color:rgb(0, 0, 0); font-weight: bold;font-style: italic;'>

&nbsp;&nbsp;&nbsp;&nbsp;


</thead>
<button name="submite" type="submit" class="button button5"
style=' background-color: grey; border: 1px solid red;color: white;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);'>Submit</button>

 <tbody ></div>
 <tr>
 
 <!-- numbers input -->
 <div id="toggle" style="display:none">
				<th>
 <p><table border="2" id="table" cellpadding="4"  cellspacing="2" width="150" bgcolor="000000" >
 
 <th>YEAR</th>
 
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
  </table>
   </p> 
    </div>
  
 
      </div>
       </div>
        </div>
         </form>
   

   

 <?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 
	 if( empty( $_POST['YEAR'] ))
    
	{
		?>
<div class="container">

<p id='plsme' style='color:red;padding:0px 0px;color: white;border-radius:2px'>the <b><i>YEAR</b></i> is required!</p></div><?php
 }

    elseif (isset($_POST['submite']))
 {
	 
		  include 'configg.php';
		  $result=0;
            $YEAR= mysqli_real_escape_string($conn,$_POST['YEAR']);
			
			 $result=mysqli_query($conn,"select * from produ where Price IS NOT NULL AND year='".$YEAR."'") or die(mysqli_error());
					if(mysqli_num_rows($result) >0 ) 
	 {
	$counter=0; ?>
	
	<!-- table to show produt -->
	<div class="container">

    		<table class="table table-striped table-responsive" >
				<tr>
				    <th  id='th' style='text-align:center;color:;font-family: "Times New Roman", Times, serif;' class='th'><h3>Bank Name</h3></th> 
                    <th  id='th' style='text-align:center;color:;font-family: "Times New Roman", Times, serif;' class='th'><h3>Account</h3></th> 					 
    				<th  id='th' style='text-align:center;color:;font-family: "Times New Roman", Times, serif;' class='th'><h3>Product Name</h3></th>
    				<th  id='th' style='text-align:center;font-family: "Times New Roman", Times, serif;' class='th'><h3>Price($)</h3></th>
    				<th  id='th' style='text-align:center;font-family: "Times New Roman", Times, serif;' class='th'><h3>Amount</h3></th>
					<th  id='th' style='text-align:center;font-family: "Times New Roman", Times, serif;' class='th'><h3>Expenditure kind</h3></th>
					<th  id='th' style='text-align:center;font-family: "Times New Roman", Times, serif;' class='th'><h3>Date</h3></th>
					
				
    			</tr>
				

			<?php while($row= mysqli_fetch_assoc($result)){ 
			
			?>
  
   <tr>
			<td style=' background-color: #ffd984;'><p style='text-align:center;color:blue;font-size:19px'><b><i><?php echo $row['bank'] ?></b></i></p></td>  
			<td style=' background-color: #ffd984;'><p style='text-align:center;color:#994d00;font-size:19px'><b><i><?php echo $row['Account'] ?></b></i></p></td>
    		<td style=' background-color: #ffffb7;'><p style='text-align:center;color:	#009973;;font-size:19px'><b><i><?php echo $row['name'] ?></b></i></p></td>
			<td style=' background-color: #ffffb7;'><p style='text-align:center;color:grey;font-size:19px'><b><?php echo $row['Price'] ?></b></p></td>
    		<td style=' background-color: #ffffb7;'><p style='text-align:center;color:Green;font-size:19px'><b><?php echo $row['amount'] ?></b></p></td>
			<td style=' background-color: #ffffb7;'> <p style='text-align:center;color:#ff9800;font-size:19px'><b><?php echo $row['Comment'] ?></b></p></td>
			<td style=' background-color: #ffffb7;'><p style='text-align:center;color:#000000;font-size:19px'><b><?php echo $row['year'] ?>-<?php echo $row['month'] ?>-<?php echo $row['day'] ?></b></p></td>
 </tr>
	          <?php
$counter++;
 }
 
 
	$result = mysqli_query($conn,"SELECT sum(Price) FROM produ where year='".$YEAR."'") or die(mysqli_error());
    		while ($rows1 = mysqli_fetch_array($result)) {
    	?>
		<!-- sum(Price) -->
		<div class="pull-right">
    		<div class="span">
    			<div class="alert alert-success"><i class="icon-credit-card icon-large"></i>&nbsp;Total Price($):&nbsp;<span style='color:#990000';><b><i><?php echo $rows1['sum(Price)']; ?></b></i></span></div>
    		</div>
    	</div>
	</div>
    	<?php 
   }
  }
 else {
	 ?>
 <h3 style='color:white ;' id='plsme'><i>ERROR</i> because your DATE n't exist</h3>;<?php 
    }
   }
    
  }	
       ?>		
					
      </tbody>
   </table>


		
<!-- the end -->	
 </body>
</html>

