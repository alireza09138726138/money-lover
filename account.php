
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Money lover</title>
  <meta charset="utf-8">
  <?php
  
include("navcost.php");
?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
  
 <?php
include("headerr.php");
include("js.php");

?>

</head>

<body style='background-color: #808080;'>
<div class="container">
 <div class="row">
            
   <center>			
    <h3 style='color:white;font-family: "Times New Roman", Times, serif;'>( BANK MANAGEMENT )</h3> 
	 </center>  
       </div>
	   
        <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
                    <button class="btn btn-warning" class="add_new_user" id="add_new_user"><i class="glyphicon glyphicon-plus"></i>
					&nbsp;&nbsp;Record New Bank & admission</button>
                      </div>
                       </br>
				        </br>
						
                <table class="table table-striped table-responsive" id="usersdata">
                    <tr>
                  <th style='text-align:center;font-family: "Times New Roman", Times, serif;'><h3 style='color:black;'>Bank</h3></th> 
                   <th style='text-align:center;font-family: "Times New Roman", Times, serif;'><h3 style='color:black;'>Account</h3></th>
                    <th style='text-align:center;font-family: "Times New Roman", Times, serif;'><h3 style='color:black;'>Action</h3></th>
                     </tr>
					 
					  <?php 
                    include 'configg.php';
                    $sql = "SELECT * FROM bank";
                    $query =  mysqli_query($conn, $sql);
                    $rows = mysqli_num_rows($query);
                    if($rows>0)
                    {
                        while($data = mysqli_fetch_array($query))
                        {
                    ?>
                    <tr  style='  background-color: lightgrey;border:1px solid orange' class="user_<?php echo $data['id']; ?>">
                       <td style='text-align:center;font-weight: bold;color:blue'><h3><i><b><?php echo $data['bank']; ?></b></i></h3></td>
						<td style='text-align:center;font-weight: bold;color:red'><h3><i><b><?php echo $data['Account']; ?></b></i></h3></td>
                      
                        <td style='text-align:center;font-family: ;color:dark grey'><h3>
                         &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="javascript:void(0);" onclick="delete_user('<?php echo $data['id']; ?>')"><i class="glyphicon glyphicon-trash"></i></a><h3>
                        </td>
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
 
  <!-- modal form -->
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
					    <input type="number" class="form-control"  min="1" id="cost" name="cost" placeholder="cost" style='background-color: lightgrey;border:2px solid grey;color:blue;font-family:italic;'>
						
                                                
				         </div>
				   
				   <div class="form-group">
                       <label style='font-family: "Times New Roman", Times, serif'><p  style='color:black; padding: 2px 8px;border-radius: 4px;; background-color:lightgrey;'>
					   Limit for buy(%?):</p></label>&nbsp;&nbsp;&nbsp;<span class="Limite error"></span>
                        
					   <input type="number" class="form-control" min="1" max="99" id="Limite" name="Limite" placeholder="Limit" style='background-color: lightgrey;border:2px solid grey;color:blue;font-family:italic;'>
                     
				          </div>
				   
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
  <script>


$("#add_new_user").click(function(){    
    $("#action").val("add");
	$("#bank").val("");
	$("#Account").val("");
	$("#cost").val("");
	$("#Limite").val("");
    $("#id").val("");
    $("#add_new_user_modal").modal('show');
});
 
$("#submit").click(function(){
    var bank = $('#bank').val();
    var Account = $('#Account').val();
    var cost = $('#cost').val();
	var Limite = $('#Limite').val();
    var html = "";
    var action = $("#action").val();
    var id = $("#id").val();
    var valid = true;
     
    
 
    if(valid == true)
    {
        var form_data = {
            bank : bank,
			Account : Account,
			cost : cost,
			Limite : Limite,
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
                    bootbox.alert(response['msg']);
                }
                else
                {
                    if(action == 'add')
                    {
                        $("#add_new_user_modal").modal('hide');
                        html += "<tr style='  background-color: lightgrey;' class=user_"+response['id']+">";
                        html += "<td style='text-align:center;font-weight: bold;color:blue'><h3><i><b>"+response['bank']+"</b></i></h3></td>";
						html += "<td style='text-align:center;font-weight: bold;color:red'><h3><i><b>"+response['Account']+"</b></i></h3></td>";
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
        url : "deleteaccoun.php",
        method : "POST",
        data : form_data,
        success : function(response) {
            $(".user_"+id).css("background","red");
            $(".user_"+id).fadeOut(1000);
        }
    });
}
</script>


 
<!-- the end -->	
 </body>
</html>
