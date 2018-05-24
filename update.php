<!DOCTYPE html>
<html lang="en">
<head>
  <title>Money lover</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- font-awesome for sidebar -->
 <link rel="shortcut icon" href="wallet-with-american-money-300x200-1.jpg" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://www.phpzag.com/demo/delete-records-with-bootstrap-confirm-modal-using-php-mysql/script/bootbox.min.js"></script>
  <?php 
 $connect = mysqli_connect("localhost", "root", "", "makharej"); 
$sql="SELECT DISTINCT * FROM produ WHERE Price='' ORDER BY id DESC";
$result=mysqli_query($connect,$sql);
$rows3 = mysqli_num_rows($result);
					
                    if(!$rows3>0)
                    { ?>
 
 <script> alert("error: because didnt any enter bank nam & account , so enter thats in new account page") </script>				
                    <?php }
					 else{?>
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

  <header>
<div class="jumbotron text-center" style='border:1px solid hsl(0, 100%, 25%)'>
  
<h3 align="center" style='color:black;font-family: "Times New Roman", Times, serif;'>Money lover</h3>
                 <h3 align="center" style='color:gray;font-family: "Times New Roman", Times, serif;'>( UPDATE OF COST )</h3>
  
  
<!-- date -->
<div class="pull-right">
 <h3 style='color:blue' id='date'><?php $date=date("d-m-Y ");echo $date;?></h3>
	</div></div>
	</header>
	<body>
  
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
 $connect = mysqli_connect("localhost", "root", "", "makharej"); 
$sql="SELECT DISTINCT bank,Account FROM produ WHERE Price='' ORDER BY id DESC";
$result=mysqli_query($connect,$sql);
$serialnumber=0;
$counter=0;
while($row=mysqli_fetch_array($result))
{
$serialnumber++;
?> 
 
                    <div class="form-group"><tr>
                        
                 <td style='text-align:center;'><h1 class='h5'><i><span ><?php echo $row['bank']; ?></span>
				 <input type="radio" name="bank" class="bank cell" id="bank" value="<?php echo $row['bank']; ?>" required >	</i>	</h1>			
                 
				 </td>
               <td style='text-align:center;'><h1 class='h5'><i><span ><?php echo $row['Account']; ?></span>
			   <input type="radio" name="Account" class="Account cell" id="Account" value="<?php echo $row['Account']; ?>" required ></i>	</h1>					
                 </h1>
			   </td>
                    </div></tr>
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
	 
          $con = mysqli_connect("localhost", "root", "", "makharej")or die(mysqli_error());
		  $result=0;
            $bank= mysqli_real_escape_string($con,$_POST['bank']);
			 $Account= mysqli_real_escape_string($con,$_POST['Account']);
			 $result=mysqli_query($con,"select * from produ where bank='".$bank."' and Account='".$Account."' ORDER BY id DESC LIMIT 0 , 1") or die(mysqli_error());
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
          $con = mysqli_connect("localhost", "root", "", "makharej")or die(mysqli_error());
		  $result=0;
            $bank= mysqli_real_escape_string($con,$_POST['bank']);
			 $result=mysqli_query($con,"select * from produ where bank='".$bank."' and Account='".$Account."' and Price='' ORDER BY id DESC LIMIT 0 , 1") or die(mysqli_error());
					if(mysqli_num_rows($result) >0 ) 
	 {while($row= mysqli_fetch_assoc($result)){
	 
 
 
 ?> 
 
 <!-- last cost in php -->
 <thead>
 <input type="hidden" name="bank" value="<?php echo $row['bank'] ?>">
 <input type="hidden" name="Account" value="<?php echo $row['Account'] ?>">
 <h3 class='h4'>last cost:&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-size:24px'><i></h3>   	 
 
 <abbr title='at least set 0  (zero)'>
 <input type="number" name="cost" min="0" value="<?php echo $row['cost']  ?>" style=' background-color: #ffd984;color:#00cc00; font-weight: bold;font-style: italic;' required></i></span></abbr>
 <h3 class='h4'>Limite or %:&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-size:24px'><i></h3>
 <input type="number" name="Limite" min="0" max="90"  value="<?php echo $row['Limite'] ?>" style=' background-color: #ffd984;color:#00cc00; font-weight: bold;font-style: italic;'required></i></span>
 <button name="submite1" type="submite1" class='btn btn-primary' class="button button5">Submit new cost</button></thead>
 <?php } 
 }}
 ?>
 </form>

 <?php  
 
 $con = mysqli_connect("localhost", "root", "", "makharej")or die(mysqli_error());
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
					
                    $query =  mysqli_query($con, $sql);
                    
					while($data = mysqli_fetch_array($query))
					{ 
         			$cost1 =$data['cost'];
					$cost2 =$cost1 + $cost;
					}
				
$sql ="INSERT INTO `produ` (`id`, `cost`, `bank`, `Account`, `Limite`) VALUES (NULL,'$cost2', '$bank','$Account' ,'$Limite')";				
$result=mysqli_query($con,$sql);		
	 if($result)
	{ ?>
         <script> bootbox.alert("<h3 style='font-weight:bold;font-style:italic;'>cost Updated Successfully.&nbsp;&nbsp;<h3>");</script>
           
		   
					 <?php } }}
	
  ?>
 </table>
 </div>
 
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
 body{   
 background-color: #808080;
 }
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
 span {
  
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

 .h5 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -40px;
  transition: 0.9s;
}

.h5:hover span {
  padding-right: 25px;
}

.h5:hover span:after {
  opacity: 1;
  right: 0;
}

.cell {cursor: cell;}

a.button,a.tp-button,button,input[type="submit"],input[type="reset"],input[type="button"]{display:inline-block;padding:11px 20px;margin-bottom:15px;cursor:pointer;margin-right:7px;border:0;border-radius:0px;position:relative;overflow:hidden;-webkit-box-shadow:inset 0 0 0 1px rgba(0,0,0,.03);box-shadow:inset 0 0 0 1px rgba(0,0,0,.03);background-image:url(../images/box_shadow_button.png);background-repeat:repeat-x}


@media only screen and (min-width: 768px){
	a.button:after,a.tp-button:after,button:after,input[type="submit"]:after,input[type="reset"]:after,input[type="button"]:after{content:"";position:absolute;left:0;top:0;height:100%;width:0;z-index:1;-webkit-transition:all .5s;-moz-transition:all .5s;transition:all .7s;background:rgba(0,0,0,.05)}

	a.button:hover:after,a.tp-button:hover:after,button:hover:after,input[type="submit"]:hover:after,input[type="reset"]:hover:after,input[type="button"]:hover:after{width:100%}
}

</style>

</body>
</html>
