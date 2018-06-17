<!DOCTYPE html>
<html lang="en">
<head>
  <title>Money lover</title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

<?php
include("assets/asset link-script/asset.php");
?> 
 <script>
$(document).ready(function(){
    
        $("#p").hide();
});
</script>

</head>

<body class='bgimg'>

<div class="w3-display-middle w3-center c" >
    <span class="w3-text-white w3-jumbo w3-animate-top" style="font-size:90px;font-family:weight"><b>MONEY<br>LOVER</b></span>
  </div>
  
<div class="well"  id='table'>
<form action="" method="post" name="Login_Form" onsubmit="return validateForm(this);">
  
   
    <tr>
      <td colspan="2" align="left" valign="top"><h2 style='color:red'><b><i>&nbsp;&nbsp;money lover</i></b></h2><h3 style='color:brown'> please enter Username & Password</h3></td><br>
    </tr>
    <tr>
      <td align="right" valign="top" ><span style='background-color:lightgrey;padding:2px 2px;;border-radius:2px;color:black'><b>Username:</b></span></td>
      <td><input name="username" type="text" class="Input" style='background-color:yellow;font-weight:bold;color:blue;'></td>
    </tr>&nbsp;&nbsp;
    <tr>
      <td align="right" style='background-color:lightgrey;padding:2px 2px;'><span style='background-color:lightgrey;padding:2px 2px;border-radius:2px;color:black'><b>Password:</b></span></td>
      <td><input name="password" type="password" id="p1" class="Input" style='background-color:yellow;font-weight:bold;color:blue;'></td>
    </tr>
    <tr>
	&nbsp;&nbsp;
      
 <td><button name="submite" class='submite' id="btnClick" type="submit" onclick="CountFun();" style='background-color:lightgrey;padding:2px 9px;border-radius:10px;color:black'><b>Submit</b></button> </td>
      </tr>
    
   </form>
  </div>
 
<?php
include("libs/smarty/Smarty.class.php");
include 'configg.php';

$sql = "SELECT * FROM user WHERE username IS NOT NULL";
$query = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($query);

if ($rows > 0) {
	
	?>
<script type="text/javascript">$(document).ready(function() {  $("#table").show(); $("#p").hide(); }) </script>

<?php
}
 else {
	
	?>
<script type="text/javascript">$(document).ready(function() {  $("#table").hide(); $("#p").show(); }) </script>

<?php
}


if (isset($_POST['submite']))
 {

 $username= mysqli_real_escape_string($conn,$_POST['username']);
 $password= mysqli_real_escape_string($conn,$_POST['password']);
 $result=mysqli_query($conn,"select * from user where username='".$username."' and password='".$password."'") or die(mysqli_error());
	  $rows3 = mysqli_num_rows($result);
	if($rows3>0) 
 {
?>
<script type="text/javascript"> $(document).ready(function() {  $("#p").show(); $("#table").hide(); }) </script>

<?php
}
else {
		 echo "<h1 id='plsme' style='color:red;padding:0px 0px;color: white;border-radius:2px'>the <b><i>fill</b></i> is wrong....please more care!</h1>";

		 
		 }
		 
		 
}
$date=date("d-m-Y ");

$smarty = new smarty();
$smarty->assign('date', $date);
$smarty->display("index.tpl");

?>
