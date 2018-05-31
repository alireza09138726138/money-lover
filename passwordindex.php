
<div class="well"  id='table'>
		 
<!-- form (if passord is exist) -->
 
 <form action="" method="post" name="Login_Form" onsubmit="return validateForm(this);">
  
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php 
	}
	?>
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
    </table>
   </form>
  </div>
 </div>

<header class="bgimg w3-display-container w3-grayscale-min"id='p'  id="home">



 <?php
 
include("navcost.php");
include("js.php");
?>

  <div class="w3-display-middle w3-center c" >
    <span class="w3-text-white w3-jumbo w3-animate-top" style="font-size:90px;font-family:weight"><b>MONEY<br>LOVER</b></span>
  </div>
  
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white"><h3 style='color:white' id='date'><?php $date=date("d-m-Y ");echo $date;?></h3></span>
  </div>
</header>


  
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
include 'configg.php';

 $username= mysqli_real_escape_string($conn,$_POST['username']);
 $password= mysqli_real_escape_string($conn,$_POST['password']);
 
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
	
	 $result=mysqli_query($conn,"select * from user where username='".$username."' and password='".$password."'") or die(mysqli_error());
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
	 
	 }
	 else {
		 echo "<h1 id='plsme' style='color:red;padding:0px 0px;color: white;border-radius:2px'>the <b><i>fill</b></i> is wrong....please more care!</h1>";
		 }
       }
	}
?>

