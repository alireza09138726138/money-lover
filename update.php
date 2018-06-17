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
   <h3 style='color:white;font-family: "Times New Roman", Times, serif;'>( UPDATE OF COST )</h3>
    </center>  
      </div>
  <?php 
include 'configg.php'; 
$sql="SELECT * FROM bank";
$result=mysqli_query($conn,$sql);
$rows3 = mysqli_num_rows($result);
					
                    if(!$rows3>0)
                    { ?>
 
 <script> alert("error: because didnt any enter bank nam & account , so enter thats in new account page") </script>				
                    <?php }
					 else{?>




	
  <!-- form -->
  <div class="container">
	<form class="form" action="#" method="post" name="calculator">
	 <table class="table"> 
<abbr title='first click bank & Account'><button name="submite" class='btn btn-primary' type="submite" class="button button5">Submit to reamain & last cost</button></abbr>

    <tr style='  background-color: lightgrey;'>  
		<th style='text-align:center;font-family: "Times New Roman", Times, serif;'> <h4 style='color:black;'><label>Bank Name</label></h4></th>  <th style='text-align:center;'>
			<h4 style='color:black;font-family: "Times New Roman", Times, serif;'><label>Account Name</label></h4></th> 
					   </tr>
 <!-- select bank,account in php -->
<?php  
$sql="SELECT * FROM bank";
$result=mysqli_query($conn,$sql);
$serialnumber=0;
$counter=0;
while($row=mysqli_fetch_array($result))
{
$serialnumber++;
?> 
 
 <div class="form-group">
  <tr>
                        
 <td style='text-align:center;'><h1 class='h5' style='color: grey;text-align: center;font-size:24px;'><i><span ><?php echo $row['bank']; ?></span>
	<input type="radio" name="bank" class="bank cell" id="bank" value="<?php echo $row['bank']; ?>" required >	</i>	</h1>			
       </td>
        <td style='text-align:center;'><h1 class='h5' style='color: grey;text-align: center;font-size:24px;'><i><span ><?php echo $row['Account']; ?></span>
		<input type="radio" name="Account" class="Account cell" id="Account" value="<?php echo $row['Account']; ?>" required ></i>	</h1>					
           </h1>
			   </td>
                    </div>
					 </tr>
 <?php 
$counter++;
 } 
 ?>
 </table >

</form>
</div>

 <form class="form" action="#" method="post" name="">
 <?php
if (isset($_POST['submite']))
 {
	 
		  
		  $result=0;
            $bank= mysqli_real_escape_string($conn,$_POST['bank']);
			 $Account= mysqli_real_escape_string($conn,$_POST['Account']);
			 $result=mysqli_query($conn,"select * from produ where bank='".$bank."' and Account='".$Account."' ORDER BY id DESC LIMIT 0 , 1") or die(mysqli_error());
					if(mysqli_num_rows($result) >0 ) 
	 {while($row= mysqli_fetch_assoc($result)){
	 
$cost= $row['cost'];  
 
 ?><div class="container">
 
 
  <!-- reamain cost in php -->
 
  <h3 class='h4'>reamain cost:&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-size:24px'><i></h3></i></span>
 

 <h1   class='h5' style='color:#00cc00'><i><?php echo $row['cost'] ?></i> </h1> <span class='h4'> + </span>
 

 <?php } 
 }
 else {?>
 <script> bootbox.alert("<h3 style='font-weight:bold;font-style:italic;'>Notice:&nbsp;&nbsp;<h3><h4> <span style='color:red'>ACCOUNT &nbsp;&nbsp;</span>not exist.</h4>");</script>
 <?php ;}
 }
 ?>
 
 
 <?php
if (isset($_POST['submite']))
 { 
		 
		  $result=0;
            $bank= mysqli_real_escape_string($conn,$_POST['bank']);
			 $result=mysqli_query($conn,"select * from produ where bank='".$bank."' and Account='".$Account."' and Price='' ORDER BY id DESC LIMIT 0 , 1") or die(mysqli_error());
					if(mysqli_num_rows($result) >0 ) 
	 {while($row= mysqli_fetch_assoc($result)){
	 
 
 
 ?> 
 
 <!-- last cost in php -->
 <thead>
 <input type="hidden" name="bank" value="<?php echo $row['bank'] ?>">
 <input type="hidden" name="Account" value="<?php echo $row['Account'] ?>">
 <h3 class='h4'>last cost:<span style='font-size:24px'><i></h3>   	 
 
 <abbr title='at least set 0  (zero)'>
 <input type="number" name="cost" min="0" value="<?php echo $row['cost']  ?>" style=' background-color: #ffd984;color:#00cc00; font-weight: bold;font-style: italic;' required></i></span></abbr>
 <h3 class='h4'>Limite (%):<span style='font-size:24px'><i></h3>
 <input type="number" name="Limite" min="0" max="90"  value="<?php echo $row['Limite'] ?>" style=' background-color: #ffd984;color:#00cc00; font-weight: bold;font-style: italic;'required></i></span>
 <button name="submite1" type="submite1" class='btn btn-primary' class="button button5">Submit new cost</button></thead>
 <?php } 
 }}
 ?>
 </form>

 <?php  
 
 
 if (isset($_POST['submite1']))
 {  

if (isset($_POST['bank']))
 {
 $bank=$_POST['bank'];}
 
 	 if (isset($_POST['bank']))
 {
 $Account=$_POST['Account'];}
 
 	 if (isset($_POST['bank']))
 {
 $cost=$_POST['cost'];}
$Limite=$_POST['Limite'];

$sql = "SELECT * FROM `produ` WHERE bank='".$bank."' AND Account='".$Account."' ORDER BY id DESC LIMIT 0 , 1;";   
					
                    $query =  mysqli_query($conn, $sql);
                    
					while($data = mysqli_fetch_array($query))
					{ 
         			$cost1 =$data['cost'];
					$cost2 =$cost1 + $cost;
					}
				
$sql ="INSERT INTO `produ` (`id`, `cost`, `bank`, `Account`, `Limite`) VALUES (NULL,'$cost2', '$bank','$Account' ,'$Limite')";				
$result=mysqli_query($conn,$sql);		
	 if($result)
	{ ?>
         <script> bootbox.alert("<h3 style='font-weight:bold;font-style:italic;'>cost Updated Successfully.&nbsp;&nbsp;<h3>");</script>
           
		   
					 <?php } }}
	
  ?>
 </table>
 </div>
 
 
<!-- the end -->	
 </body>
</html>
