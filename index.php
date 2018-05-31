
	<!DOCTYPE html>
<html lang="en">
<head>
  <title>Money lover</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
 <?php
include("ass.php");
?>


 <body class='bgimg'>
<script>
$(document).ready(function(){
    
        $("#p").hide();
});
</script>

 <style>
.bgimg {
    background-position: cover;
    background-size: 100% 100%;
    background-image: url("picture/cash_and_gold-300x239-1.jpg");
    min-height: 100%;
	   box-shadow: inset 0 0 0 10000px rgba(0.7, 0.9, 0.9, 0.19);
}
</style>
 
<?php
 include 'configg.php';
 $sql = "SELECT * FROM user WHERE username IS NOT NULL";  
                    $query =  mysqli_query($conn, $sql);
                    $rows = mysqli_num_rows($query);
                    if($rows>0)
                    {
		 
		  include("passwordindex.php");
					}
					
					else{
	
	include("passwordindexnot.php");
					}
 ?>
<!-- the end -->	
 </body>
</html>