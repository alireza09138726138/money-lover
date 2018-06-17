
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
	
<body style='background-color: #808080;'>
<div class="container">
 <div class="row">
            
 <center>			
   <h3 style='color:white;font-family: "Times New Roman", Times, serif;'>( PASSWORD CREATE )</h3> 
	</center>  
      </div>
         <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
				<!-- button for create password -->
                    <button class="btn btn-primary" class="add_new_user" id="add_new_user"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;create password</button>
                </div>
                </br></br>
                <table class="table table-striped table-responsive" id="usersdata">
                    <tr style='background-color: blue;'>
                        <th style='text-align:center;background-color: lightgrey;font-family: "Times New Roman", Times, serif;border-radius: 15px 50px 30px 5px;'>Password</th>
                        <th style='text-align:center;background-color: lightgrey;font-family: "Times New Roman", Times, serif;border-radius: 15px 50px 30px 5px;' >username</th>
                        <th style='text-align:center;background-color: lightgrey;font-family: "Times New Roman", Times, serif;border-radius: 15px 50px 30px 5px;'>Action</th>
                    </tr>
 
                    <?php 
                    include 'configg.php';
                    $sql = "SELECT * FROM user";
                    $query =  mysqli_query($conn, $sql);
                    $rows = mysqli_num_rows($query);
                    if($rows>0)
                    {
                        while($data = mysqli_fetch_array($query))
                        {
                    ?>
                    <tr class="user_<?php echo $data['id']; ?>">
                        <td style='text-align:center;'><h3 style='background-color:green;color:white;padding:5px 5px;'><i><?php echo $data['username']; ?></i></h3></td>
                        
                        <td style='text-align:center;'><h3 style='background-color:green;color:white;padding:5px 5px;'><i><?php echo $data['password']; ?></i></h3></td>
                        <td style='text-align:center;'>
						<h3 style='background-color:green;color:white;padding:5px 5px;'>
                            <a href="javascript:void(0);" style='color:lightgrey' onclick="edit_user('<?php echo $data['id']; ?>')"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="javascript:void(0);" style='color:lightgrey' onclick="delete_user('<?php echo $data['id']; ?>')"><i class="glyphicon glyphicon-trash"></i></a>
                        </h3></td>
                    </tr>
                    <?php
                        }
                    } /*if condition*/
                    ?>
                </table>
            </div>
        </div>
    </div>    
</body>
 
 <!-- modal for create password -->
<div class="modal fade" id="add_new_user_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <form method="POST" role="form">
 
                   <div class="form-group">
                        <label for="">username</label>&nbsp;&nbsp;&nbsp;<span class="username error"></span>
                        <input type="text" class="form-control" id="username" name="username" placeholder="enter username">
                    </div>
 
                    <div class="form-group">
                        <label for="">password</label>&nbsp;&nbsp;&nbsp;<span class="password error"></span>
                        
					<input type="password" class="form-control" value="" id="password" name="password" placeholder="enter password"><br><br>
                          <input type="checkbox" onclick="myFunction()">Show Password
                    </div>
 
 
                    <input type="hidden" id="action" name="action" value="add">
                    <input type="hidden" id="id" name="id" value="">
                    <button type="button" id="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </form>               
            </div>
          
        </div>
    </div>
</div>
 
 <!-- Script for add new data -->
   <script type="text/javascript" src="assets/js/username.js"></script>
 
  
<!-- the end -->	
 </body>
</html>
