
	<!DOCTYPE html>
<html lang="en">
<head>
  <title>Money lover</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="wallet-with-american-money-300x200-1.jpg" />
 
  <!-- font-awesome for sidebar -->
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

<div class="jumbotron text-center" style='border:1px solid hsl(0, 100%, 25%)'>
                <h3 align="center" style='color:black;font-family: "Times New Roman", Times, serif;'>Money lover</h3>
<h3 align="center" style='color:GREY;font-family: "Times New Roman", Times, serif;'>( BANK MANAGEMENT )</h3>				
                
             <div class="pull-right">
              <h3 style='color:blue' id='date'><?php $date=date("d-m-Y ");echo $date;?></h3>
	            </div> 				
				 </div>

    <div class="container">
        
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
                    <button class="btn btn-warning" class="add_new_user" id="add_new_user"><i class="glyphicon glyphicon-plus"></i>
					&nbsp;&nbsp;Record New Bank & admission</button>
                </div>
                </br></br>
                <table class="table table-striped table-responsive" id="usersdata">
                    <tr>
                        <th style='text-align:center;font-family: "Times New Roman", Times, serif;'><h3 style='color:black;'>Bank</h3></th> 
                    <th style='text-align:center;font-family: "Times New Roman", Times, serif;'><h3 style='color:black;'>Account</h3></th>
					 <th style='text-align:center;font-family: "Times New Roman", Times, serif;'> <h3 style='color:black;'>Cost</h3></th>
					 <th style='text-align:center;font-family: "Times New Roman", Times, serif;'> <h3 style='color:black;'>Limit Cost</h3></th>
                        <th style='text-align:center;font-family: "Times New Roman", Times, serif;'><h3 style='color:black;'>Action</h3></th>
                    </tr>
 

                </table>
				  
            </div>
        </div>
    </div>    
</body>
 
<div class="modal fade" id="add_new_user_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <form method="POST" role="form">
 
                    <div class="form-group"> 
                        <label style='font-family: "Times New Roman", Times, serif'><p  style='color:black; padding: 2px 8px;border-radius: 4px;; background-color:lightgrey;'>Bank:</p></label>&nbsp;&nbsp;&nbsp;<span class="bank error"></span>
                        <input type="text" class="form-control" id="bank" name="bank" placeholder="bank" style='background-color: lightgrey;border:2px solid grey;color:blue;font-family:italic;'>
                    </div>
 
                <div class="form-group">
                       <label style='font-family: "Times New Roman", Times, serif'><p  style='color:black; padding: 2px 8px;border-radius: 4px;; background-color:lightgrey;'> Account:</p></label>&nbsp;&nbsp;&nbsp;<span class="Account error"></span>
                        <input type="text" class="form-control" id="Account" name="Account" placeholder="Account" style='background-color: lightgrey;border:2px solid grey;color:blue;font-family:italic;'>
                    </div>
					
					  <div class="form-group">
                       <label style='font-family: "Times New Roman", Times, serif'><p  style='color:black; padding: 2px 8px;border-radius: 4px;; background-color:lightgrey;'>Cost:</p></label>&nbsp;&nbsp;&nbsp;<span class="cost error"></span>
                         <abbr  title="for record new cost just enter new and auto calculate with last cost"> 
					   <input type="number" class="form-control" id="cost" name="cost" placeholder="cost" style='background-color: lightgrey;border:2px solid grey;color:blue;font-family:italic;'>
                   </abbr> </div>
				   
				   <div class="form-group">
                       <label style='font-family: "Times New Roman", Times, serif'><p  style='color:black; padding: 2px 8px;border-radius: 4px;; background-color:lightgrey;'>
					   Limit for buy(%?):</p></label>&nbsp;&nbsp;&nbsp;<span class="Limite error"></span>
                         <abbr  title="for record new cost just enter new and auto calculate with last cost"> 
					   <input type="number" class="form-control" id="Limite" name="Limite" placeholder="Limit" style='background-color: lightgrey;border:2px solid grey;color:blue;font-family:italic;'>
                   </abbr> </div>
				   
                    <input type="hidden" id="action" name="action" value="add">
                    <input type="hidden" id="id" name="id" value="">
                    <button type="button" id="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </form>               
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>
  <script type="text/javascript" src="http://www.phpzag.com/demo/delete-records-with-bootstrap-confirm-modal-using-php-mysql/script/bootbox.min.js"></script>	
<!-- Script for add new data -->
<script type="text/javascript">
$("#add_new_user").click(function(){    
    $("#action").val("add");
    $("#id").val("");
	$("#Limite").val("");
	$('#bank').val("");
    $('#Account').val("");
    $('#cost').val("");
    $("#id").val("");
    $("#add_new_user_modal").modal('show');
});
 
$("#submit").click(function(){
     var bank = $('#bank').val();
     var Limite = $('#Limite').val();	 
     var cost = $('#cost').val();
	 var Account = $('#Account').val();
     var html = "";
    
   
    var action = $("#action").val();
    var id = $("#id").val();
    var valid = true;
     
    
    if(valid == true)
    {
        var form_data = {  
           bank : bank,
		   Limite : Limite,
           cost : cost,
		   Account : Account,
            action : action,
            id : id
        };
         
        $.ajax({
            url : "insertaccount.php",
            type : "POST",
            data : form_data,
            dataType : "json",
            success: function(response){
                if(response['valid']==false)
                {
                   bootbox.alert(response["msg"]);
                }
                else
                {
                    if(action == 'add')
                    {
                        $("#add_new_user_modal").modal('hide');     
                        html += "<tr style='  background-color: lightgrey;' class=user_"+response['id']+">";  
                        html += "<td style='text-align:center;font-weight: bold;color:blue'><h3>"+response['bank']+"</h3></td>";
						html += "<td style='text-align:center;font-weight: bold;color:red'><h3>"+response['Account']+"</h3></td>";
						html += "<td style='text-align:center;font-weight: bold;color:hsl(0, 100%, 25%)'><h3>"+response['cost']+"</h3></td>";
						html += "<td style='text-align:center;font-weight: bold;color:hsl(0, 100%, 25%)'><h3>"+response['Limite']+"</h3></td>";
                        html += " <td style='text-align:center;font-family: ;color:dark grey'><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:void(0);' onclick='delete_user("+response['id']+");'><i class='glyphicon glyphicon-trash'></i></a></h3></td>";
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

function delete_user(id) {
    var form_data = {
        id : id 
    };
    $.ajax({
        url : "deleteprodu.php",
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
 
 a.button,a.tp-button,button,input[type="submit"],input[type="reset"],input[type="button"]{display:inline-block;padding:11px 20px;margin-bottom:15px;cursor:pointer;margin-right:7px;border:0;border-radius:0px;position:relative;overflow:hidden;-webkit-box-shadow:inset 0 0 0 1px rgba(0,0,0,.03);box-shadow:inset 0 0 0 1px rgba(0,0,0,.03);background-image:url(../images/box_shadow_button.png);background-repeat:repeat-x}


@media only screen and (min-width: 768px){
	a.button:after,a.tp-button:after,button:after,input[type="submit"]:after,input[type="reset"]:after,input[type="button"]:after{content:"";position:absolute;left:0;top:0;height:100%;width:0;z-index:1;-webkit-transition:all .5s;-moz-transition:all .5s;transition:all .7s;background:rgba(0,0,0,.05)}

	a.button:hover:after,a.tp-button:hover:after,button:hover:after,input[type="submit"]:hover:after,input[type="reset"]:hover:after,input[type="button"]:hover:after{width:100%}
}

 </style>
</html>