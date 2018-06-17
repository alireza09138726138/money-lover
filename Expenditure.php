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
   <h3 style='color:white;font-family: "Times New Roman", Times, serif;'>( EXPENDITURE OF BETWEEN TIMES WHIT PRODUCT NAME )</h3>
    </center>  
      </div>
	  
	<div class="pull-left">
	 <div class="well" style='border:1px solid hsl(0, 100%, 25%)' >
	  <form class="form" action="#" method="post" name="">
	   <thead>
<span style='color:#663399' class='h4'><b>Startdate:</b></span>
<input class="btn2" type="date" value=""  name="startDate" placeholder="Enter YEAR" id='button' onclick="showDiv('toggle2')" style=' background-color: #ffd984;color:rgb(0, 0, 0); font-weight: bold;font-style: italic;'>

<span style='color:#663399' class='h4'><b>Enddate:</b></span>
<input class="btn2" type="date" value=""  name="endDate" placeholder="Enter YEAR" id='button' onclick="showDiv('toggle2')" style=' background-color: #ffd984;color:rgb(0, 0, 0); font-weight: bold;font-style: italic;'> &nbsp;&nbsp;&nbsp;&nbsp;<button name="submite" type="submit" class="button "
style=' background-color: grey; border: 1px solid red;color: white;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);'>Submit</button><br>
</thead>

<!-- table for show product -->
<table>
 <tr>

 <th style='color:black;padding: 2px 1px;background-color:  lightgrey;'>&nbsp;&nbsp;Product name:</th>

<?php 
include 'configg.php';  
$sql="SELECT DISTINCT name FROM produ WHERE !Price=''";
$result=mysqli_query($conn,$sql);
$serialnumber=0;
$counter=0;
while($row=mysqli_fetch_array($result))
{
$serialnumber++;
?> 
 
                    <tr>
                        
                 <th style='text-align:center;color:grey'><h2 class='h5'><span ><b><i><?php echo $row['name']; ?></i></b></span></h2>
				 <input type="radio" name="product" class="bank cell" id="product" value="<?php echo $row['name']; ?>" required >	</i>
                    </div> 
					 </th>
					  </tr>
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
   
<!-- php for show product -->
 <?php 
	
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 
	 if( empty( $_POST['startDate'] ))
	{?>
<div class="container">

<p id='plsme' style='color:red;padding:0px 0px;color: white;border-radius:2px'>the <b><i>startDate</b></i> is required!</p></div><?php }

    elseif (isset($_POST['submite']))
 {       
	 
		  $result=0;
		     
			$startDate= mysqli_real_escape_string($conn,$_POST['startDate']); 
			$endDate= mysqli_real_escape_string($conn,$_POST['endDate']);
			$product= mysqli_real_escape_string($conn,$_POST['product']);
			
		
$result=mysqli_query($conn,"SELECT * FROM produ WHERE date >= '".$startDate."' AND date <= '".$endDate."' and name='".$product."';") or die(mysqli_error());
					if(mysqli_num_rows($result) >0 ) 
	 {
	$counter=0; ?>
	
	<!-- th<table> for show product -->
	<div class="container">

    		<table class="table table-striped table-responsive" id="usersdata">
				<tr>
				    <th  id='th' style='text-align:center;color:;font-family: "Times New Roman", Times, serif;' ><h3>Bank Name</h3></th> 
                    <th  id='th' style='text-align:center;color:;font-family: "Times New Roman", Times, serif;' ><h3>Account</h3></th> 					 
    				<th  id='th' style='text-align:center;color:;font-family: "Times New Roman", Times, serif;' ><h3>Product Name</h3></th>
    				<th  id='th' style='text-align:center;font-family: "Times New Roman", Times, serif;' ><h3>Price($)</h3></th>
    				<th  id='th' style='text-align:center;font-family: "Times New Roman", Times, serif;'><h3>Amount</h3></th>
					<th  id='th' style='text-align:center;font-family: "Times New Roman", Times, serif;' ><h3>Expenditure kind</h3></th>
					<th  id='th' style='text-align:center;font-family: "Times New Roman", Times, serif;' ><h3>Date</h3></th>
    			     </tr>
				
    		

			<?php while($row= mysqli_fetch_assoc($result)){ 
			
			?>
  <!-- php<td> for show product -->
   <tr>
			<td style=' background-color: #ffd984;'><p style='text-align:center;color:blue;font-size:19px'><b><i><?php echo $row['bank'] ?></b></i></p></td>  
			<td style=' background-color: #ffd984;'><p style='text-align:center;color:#994d00;font-size:19px'><b><i><?php echo $row['Account'] ?></b></i></p></td>
    		<td style=' background-color: #ffffb7;'><p style='text-align:center;color:	#009973;font-size:19px'><b><i><?php echo $row['name'] ?></b></i></p></td>
    		<td style=' background-color: #ffffb7;'><p style='text-align:center;color:grey;font-size:19px'><b><?php echo $row['Price'] ?></b></p></td>
    		<td style=' background-color: #ffffb7;'><p style='text-align:center;color:Green;font-size:19px'><b><?php echo $row['amount'] ?></b></p></td>
			<td style=' background-color: #ffffb7;'> <p style='text-align:center;color:#ff9800;font-size:19px'><b><?php echo $row['Comment'] ?></b></p></td>
			<td style=' background-color: #ffffb7;'><p style='text-align:center;color:#000000;font-size:19px'><b><?php echo $row['year'] ?>-<?php echo $row['month'] ?>-<?php echo $row['day'] ?></b></p>
			</td>
 </tr>
 
 <!-- php for some price -->
	          <?php
$counter++;}
 
                                
	$result = mysqli_query($conn,"SELECT sum(Price) FROM produ WHERE date >= '".$startDate."' AND date <= '".$endDate."' and name='".$product."';") or die(mysqli_error());
    		while ($rows1 = mysqli_fetch_array($result)) {
    	?>
		<div class="pull-right">
    		<div class="span">
    			<div class="alert alert-success"><i class="icon-credit-card icon-large"></i>&nbsp;Total Price($):&nbsp;<span style='color:#990000';><b><i><?php echo $rows1['sum(Price)']; ?></b></i></span></div>
    		</div>
    	</div></div>
    	<?php 
  }}
 else {?><br>
 <h3 style='color:white ;' id='plsme'><i>&nbsp;&nbsp;&nbsp;ERROR</i> because your DATE or product name n't exist</h3>;<?php }}
    
  }	
       ?>		
					
</tbody>
    	</table>
		
		
 
<!-- the end -->	
 </body>
</html>

