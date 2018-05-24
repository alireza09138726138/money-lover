
 <!DOCTYPE html>
<html>
<head>
    <title>Money lover</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <!-- font-awesome for sidebar -->
   <link rel="shortcut icon" href="wallet-with-american-money-300x200-1.jpg" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="http://www.phpzag.com/demo/delete-records-with-bootstrap-confirm-modal-using-php-mysql/script/bootbox.min.js"></script>
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
                 <h3 align="center" style='color:gray;font-family: "Times New Roman", Times, serif;'>( PASSWORD CREATE )</h3>
        <br>
		
		<div class="pull-right">
 <h3 style='color:blue' id='date'><?php
/*date in header*/
 $date=date("d-m-Y ");echo $date;?></h3>
	</div>
	</div>
	
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
				<!-- button for create password -->
                    <button class="btn btn-primary" class="add_new_user" id="add_new_user"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;create password</button>
                </div>
                </br></br>
                <table class="table table-striped table-responsive" id="usersdata">
                    <tr style='background-color: blue;'>
                        <th style='text-align:center;background-color: lightgrey;font-family: "Times New Roman", Times, serif;' class='th'>Password</th>
                        
                        <th style='text-align:center;background-color: lightgrey;font-family: "Times New Roman", Times, serif;' class='th'>username</th>
                        <th style='text-align:center;background-color: lightgrey;font-family: "Times New Roman", Times, serif;' class='th'>Action</th>
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
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Fill Details</h4>
            </div>
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
<script type="text/javascript">
$("#add_new_user").click(function(){
    $("#action").val("add");
    $("#id").val("");
    $("#add_new_user_modal").modal('show');
});
 
$("#submit").click(function(){
    var password = $('#password').val();
     var username = $('#username').val();
 
    var html = "";
    
    var action = $("#action").val();
    var id = $("#id").val();
    var valid = true;
	if(username == "" || username == null)
    {
        valid = false;
        $(".username").html("<p style='color:red'></i>* This field is required.</i></p>");
    }
    else
    {
        $(".username").html("");    
    }
     if(password == "" || password == null)
    {
        valid = false;
        $(".password").html("<p style='color:red'></i>* This field is required.</i></p>");
    }
    else
    {
        $(".password").html("");    
    }
    
 
    if(valid == true)
    {
        var form_data = {
            username : username,
            password : password,
            action : action,
            id : id
        };
         
        $.ajax({
            url : "insertuser.php",
            type : "POST",
            data : form_data,
            dataType : "json",
            success: function(response){
                if(response['valid']==false)
                {
                    bootbox.alert(response['msg']);
                }
                else
                {
                    if(action == 'add')
                    {
                        $("#add_new_user_modal").modal('hide');
                        html += "<tr class=user_"+response['id']+">";
                        html += "<td style='text-align:center;'><h3 style='background-color:green;color:white;padding:5px 5px;'><i>"+response['username']+"</i></h3></td>";
                       html += "<td style='text-align:center;'><h3 style='background-color:green;color:white;padding:5px 5px;'><i>"+response['password']+"</i></h3></td>";
                        html += "<td style='text-align:center;'><h3 style='background-color:green;color:white;padding:5px 5px;'><a href='javascript:void(0);' style='color:lightgrey' onclick='edit_user("+response['id']+");'><i class='glyphicon glyphicon-pencil'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:void(0);' style='color:lightgrey' onclick='delete_user("+response['id']+");'>&nbsp;<i class='glyphicon glyphicon-trash'></i></a></h3></td>";
                        html += "<tr>";
                        $("#usersdata").append(html);
                    }
                    else
                    {
                        window.location.reload();
                    }
                }
            }
        });
    }
    else
    {
        return false;
    }
});
 

 
function edit_user(id) {
    var form_data = {
        id : id 
    };
    $.ajax({
        url : "edituser.php",
        method : "POST",
        data : form_data,
        dataType : "json",
        success : function(response) {
            $('#username').val(response['username']);  
             $('#password').val(response['password']);
            $("#id").val(response['id']);
            $("#add_new_user_modal").modal('show');
            $("#action").val("edit");
        }
    });
}
 
function delete_user(id) {
    var form_data = {
        id : id 
    };
    $.ajax({
        url : "deleteusers.php",
        method : "POST",
        data : form_data,
        success : function(response) {
            $(".user_"+id).css("background","red");
            $(".user_"+id).fadeOut(1000);
        }
    });
}
</script>
<script>
function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>

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
body{   background-color: #808080;}
 .th{border-radius: 15px 50px 30px 5px;}
</style>
</body>
</html>