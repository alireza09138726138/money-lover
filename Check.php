<!DOCTYPE html>
<html>
<head>
    <title>Money lover</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <!-- font-awesome for sidebar -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="shortcut icon" href="wallet-with-american-money-300x200-1.jpg" />
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
                 <h3 align="center" style='color:gray;font-family: "Times New Roman", Times, serif;'>( CHECK MANAGEMENT )</h3>				
               <!-- show date in header -->
             <div class="pull-right">
              <h3 style='color:blue' id='date'><?php $date=date("d-m-Y ");echo $date;?></h3>
			  </div>
			  
			  <div class="pull-left">
	            <?php 
                    include 'configg.php';
					
					$date=date("Y-m-d");
					
                    $sql = "SELECT * FROM `check1` WHERE pay6='$date'";
					
                    $query =  mysqli_query($conn, $sql);
                    $rows = mysqli_num_rows($query);
					if($rows>0)
                    {
					echo '<br>';
					while($data = mysqli_fetch_array($query))
                        {  $name =$data['name'];  echo "<p id='plsme'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='color:red;'>the <b><i>ALARM</b></i> OF<span style='color:orange;'> $name</span> CHECK!</p></span>"; 
					}
				}
					
					?>
				</div>
						</div>		
			
<body>
    <div class="container">
        
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
     <button class="btn btn-primary" class="add_new_user" id="add_new_user" style=' background-color: orange;'><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;Add New</button>
                </div>
                </br></br>
				<!-- show table in php -->
   <table class="table table-striped table-responsive" id="usersdata">
    <tr>
<th style='text-align:center;font-family: "Times New Roman", Times, serif; background-color:blue;' class='th'><h4 style='color:white;'>Bank Name</h4></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:orange;' class='th'><h4 style='color:white;'>Person Name</h4></th> 
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:red;' class='th'><h4 style='color:white;'>Check Number</h4></th> 
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:#a65959;' class='th'> <h4 style='color:white;'>Mony Amount</h4></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:grey;' class='th'> <h4 style='color:white;'>Check Kind</h4></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:#990000;' class='th'> <h4 style='color:white;'>Spend</h4></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:black;' class='th'> <h4 style='color:white;'>Comment</h4></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:#8000ff;' class='th'> <h4 style='color:white;'> Pay date</h4></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:#bf00ff;' class='th'><h4 style='color:white;'>Alarm Pay date</h4></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;' class='th'><h4 style='color:black;'>Action</h4></th>
   </tr>
 <style>
 .th{border-radius: 15px 50px 30px 5px;}
 .h4{padding: 2px 8px;}
 .p{ padding: 2px 8px;}
 </style>
                    <?php 
                    include 'configg.php';
					$date=date("Y");$date2=date("m");$date3=date("d");
                    $sql = "SELECT * FROM `check1`";
					
                    $query =  mysqli_query($conn, $sql);
                    $rows = mysqli_num_rows($query);
                    if($rows>0)
                    {
                        while($data = mysqli_fetch_array($query))
                        { 
                    ?> 
               <tr style='  background-color: lightgrey;' class="user_<?php echo $data['id']; ?>">  
  <td style='text-align:center;font-weight: bold;color:blue;font-style: italic;'><h4><?php echo $data['name']; ?><h4></td> 
  <td style='text-align:center;font-weight: bold;color:orange;font-style: italic;'><h4><?php echo $data['person']; ?><h4></td>
  <td style='text-align:center;font-weight: bold;color:red;font-style: italic;'><h4><?php echo $data['number']; ?><h4></td>
  <td style='text-align:center;font-weight: bold;color:#a65959;font-style: italic;'><h4><?php echo $data['Amount']; ?><h4></td>
  <td style='text-align:center;font-weight: bold;color:grey;font-style: italic;'><h4><?php echo $data['gender']; ?><h4></td>
  <td style='text-align:center;font-weight: bold;color:#990000;font-style: italic;'><h4><?php echo $data['gender1']; ?><h4></td>
  <td style='text-align:center;font-weight: bold;color:black;font-style: italic;'><h4><?php echo $data['Comment']; ?><h4></td> 
  <td style='text-align:center;font-weight: bold;color:#8000ff;font-style: italic;'><abbr  title='Notice: Year /month /day'><h4><?php echo $data['pay']; ?><h4></td></abbr> 
  <td style='text-align:center;font-weight: bold;color:#bf00ff;font-style: italic;'><h4><?php echo $data['pay6']; ?><h4></td>
  <td style='text-align:center;font-family: ;color:dark grey;font-style: italic;'><h4>
  <abbr  title="Edit detail"> <a href="javascript:void(0);" style="color:black" onclick="edit_user('<?php echo $data['id']; ?>')">
  <i class="glyphicon glyphicon-pencil"></i></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;
  <abbr  title='Notice: as soon click your choose will become delete'>
  <a href="javascript:void(0);" style="color:black" onclick="delete_user('<?php echo $data['id']; ?>')">
   <i class="glyphicon glyphicon-trash"></i></a> </abbr>
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
 
<div class="modal fade" id="add_new_user_modal">
    <div class="modal-dialog">
        <div class="modal-content">
           
    <div class="modal-body">
    <form method="POST" role="form">
                  
    <div class="row">
    <div class="col-sm-6">
    <div class="form-group">
    <label style='font-family: "Times New Roman", Times, serif'><p class='p' style='color:black; border-radius: 4px;; background-color:lightgrey;'>Bank Name:</p></label>&nbsp;&nbsp;&nbsp;<span class="name error"></span>  
    <input type="text" class="form-control" id="name" name="name" placeholder="Bank Name" style='background-color: lightgrey;border:2px solid grey;color:blue;font-family:italic;'>
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group">
    <label style='font-family: "Times New Roman", Times, serif'><p class='p' style='color:black;border-radius: 4px;; background-color:lightgrey;'>Person Name:</p></label>&nbsp;&nbsp;&nbsp;<span class="l_name_error error"></span>
    <input type="text" class="form-control" id="person" name="person" placeholder="person" style='background-color: lightgrey;border:2px solid grey;color:orange;font-family:italic;'>
    </div>
 </div>
</div>
	
	<div class="row">
    <div class="col-sm-6">
	
 <div class="form-group">
   <label style='font-family: "Times New Roman", Times, serif'><p class='p' style='color:black; border-radius: 4px;; background-color:lightgrey;'> Check Number:</p></label>&nbsp;&nbsp;&nbsp;<span class="number error"></span>
   <input type="number" class="form-control" id="number" name="number" placeholder="number" style='background-color: lightgrey;border:2px solid grey;color:red;font-family:italic;'>
   </div>
  </div> 
  
  <div class="col-sm-6">
	<div class="form-group">
    <label style='font-family: "Times New Roman", Times, serif'><p class='p' style='color:black; border-radius: 4px;; background-color:lightgrey;'>Mony Amount:</p></label>&nbsp;&nbsp;&nbsp;<span class="Amount error"></span>
    <input type="number" class="form-control" id="Amount" name="Amount" placeholder="amount" style='background-color: lightgrey;border:2px solid grey;color:#a65959;font-family:italic;'>
    </div>
  </div>
</div>   
  
  <div class="row">
     <div class="col-sm-11">
	<div class="form-group">
    <label style='font-family: "Times New Roman", Times, serif'><p class='p' style='color:black; border-radius: 4px;; background-color:lightgrey;'> Comment:</p></label>&nbsp;&nbsp;&nbsp;<span class="Comment error"></span>
    <textarea type="text" class="form-control" id="Comment" name="Comment" placeholder="Comment..." style='background-color: lightgrey;border:2px solid grey;color:black;font-family:italic;'></textarea> 
    </div></div>
</div>
<div class="row">
    <div class="col-sm-6">
<div class="form-group">
    <label style='font-family: "Times New Roman", Times, serif'><p class='p' style='color:black;border-radius: 4px;; background-color:lightgrey;'> Pay date:</p></label>&nbsp;&nbsp;&nbsp;<span class="pay error"></span>
    <div class="row">
	<div class="col-sm-12"><abbr  title="enter date">
	 <abbr  title="Notice: month/day/Year">
	 <input type="date" onkeypress="return isNumeric(event)" class="form-control" id="pay" name="pay" class="pay" value="2014-02-09" style='background-color: WHITE;border:2px solid grey;color:#8000ff;font-family:italic;'>
    </abbr>
	</div>	
   </div>
  </div>	
</div>

<div class="col-sm-6">
		<div class="form-group">
    <label style='font-family: "Times New Roman", Times, serif'><p class='p' style='color:black; border-radius: 4px;; background-color:lightgrey;'>Alarm Pay date:</p></label>
	
<abbr  title="enter alarm date">
	<input type="date" onkeypress="return isNumeric(event)" class="form-control" id="pay6" name="pay6" class="pay6" value="2014-02-09" style='background-color: WHITE;border:2px solid grey;color:#bf00ff;font-family:italic;'>
	
    </abbr>
	</div>
   </div>		
		</div>	
			
			<div class="row">
 <div class="col-sm-6">
					
 <div class="form-group">
 <label for="" class='p' style='font-family: "Times New Roman", Times, serif;color:black; border-radius: 4px;; background-color:lightgrey;'>Check Kind:&nbsp;&nbsp;</label><br>
 <input type="radio" name="gender" class="gender cell" value="Check out "> Check out 
 <input type="radio" name="gender" class="gender cell" value="Check in"> Check in
 </div>
</div>

<div class="col-sm-6">
<div class="form-group">
<label for="" class='p' style='font-family: "Times New Roman", Times, serif;color:black;border-radius: 4px;; background-color:lightgrey;'>Spend:&nbsp;&nbsp;</label><br>
<input type="radio" name="gender1" class="gender1 cell" value="Check pass  "> Check pass  
<input type="radio"  name="gender1" class="gender1 cell" value="Check nopass"> Check nopass
   </div>
  </div>
</div>
 
  <input type="hidden" id="action" name="action" value="add">
  <input type="hidden" id="id" name="id" value="">
  &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" id="submit" class="btn btn-primary" style=' background-color: orange;position:relative;bottom:10px'>Submit</button>
  &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-default" data-dismiss="modal" style=' background-color: grey;position:relative;bottom:10px'>Close</button>
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
    $('#name').val("");
	  $('#person').val("");
	  $("#number").val(""); 
	  $("#pay").val("");
	  $('#Amount').val("");
	  $("#Comment").val("");
	  $("#pay6").val("");
	  $('#gender').val("");
	  $('#gender1').val("");
    $("#id").val("");
    $("#add_new_user_modal").modal('show');
});
 
$("#submit").click(function(){
    var name = $('#name').val();
	var person = $('#person').val();
	var number = $('#number').val();
	var pay = $('#pay').val();
	var Amount = $('#Amount').val();
	var Comment = $('#Comment').val();
	var pay6 = $('#pay6').val();
	var gender = $("input:radio[name='gender']:checked").val();
	var gender1 = $("input:radio[name='gender1']:checked").val();
    var html = "";
    var action = $("#action").val();
    var id = $("#id").val();
    var valid = true;
    
    if(valid == true)
    {
        var form_data = {			
            name : name,
			person : person,
			pay : pay,
			number : number,
			Amount : Amount,
			Comment : Comment,
			pay6 : pay6,
			gender : gender,
			gender1 : gender1,
            action : action,
            id : id
        };
         
        $.ajax({
            url : "insertcheck.php",
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
                        html += "<tr style='  background-color: lightgrey;font-style: italic;' class=user_"+response['id']+">"; 
   						
						html += "<td style='text-align:center;font-weight: bold;color:blue;'><h4>"+response['name']+"</h4></td>";
						 html += "<td style='text-align:center;font-weight: bold;color:orange'><h4>"+response['person']+"</h4></td>";
						 html += "<td style='text-align:center;font-weight: bold;color:red'><h4>"+response['number']+"</h4></td>";
						 html += "<td style='text-align:center;font-weight: bold;color:#a65959'><h4>"+response['Amount']+"</h4></td>";
						 html += "<td style='text-align:center;font-weight: bold;color:grey'><h4>"+response['gender']+"</h4></td>";
						 html += "<td style='text-align:center;font-weight: bold;color:#990000'><h4>"+response['gender1']+"</h4></td>";
						 html += "<td style='text-align:center;font-weight: bold;color:black'><h4>"+response['Comment']+"</h4></td>";
					html += "<td style='text-align:center;font-weight: bold;color:#8000ff'><abbr  title='Notice: Year /month /day'><h4>"+response['pay']+"</abbr></h4></td>";
					html += "<td style='text-align:center;font-weight: bold;color:#bf00ff'><h4>"+response['pay6']+"</h4></td>";
                        html += "<td style='text-align:center;font-family: ;color:dark grey'><h4><abbr  title='Edit detail'><a style='color:black' href='javascript:void(0);' onclick='edit_user("+response['id']+");'><i class='glyphicon glyphicon-pencil'></i></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<abbr  title='Notice: as soon click your choose will become delete'><a href='javascript:void(0);' style='color:black' onclick='delete_user("+response['id']+");'><i class='glyphicon glyphicon-trash'></i></a></abbr></h4></td>";
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
        url : "editcheck.php",
        method : "POST",
        data : form_data,
        dataType : "json",
        success : function(response) {
            $('#name').val(response['name']);
			$('#person').val(response['person']);
			$('#number').val(response['number']);
			$('#pay').val(response['pay']);
			$('#pay6').val(response['pay6']);
			$('#Amount').val(response['Amount']);
			 $('#Comment').val(response['Comment']);
             $('.gender').each(function(){
                if($(this).val() == response['gender'])
                {
                    $(this).prop("checked",true);
                }
            });
            $('.gender1').each(function(){
                if($(this).val() == response['gender1'])
                {
                    $(this).prop("checked",true);
                }
            });			
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
        url : "deletecheck.php",
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
function maxLengthCheck(object) {
if (object.value.length > object.maxLength)
  object.value = object.value.slice(0, object.maxLength)
}

function isNumeric (evt) {
var theEvent = evt || window.event;
var key = theEvent.keyCode || theEvent.which;
key = String.fromCharCode (key);
var regex = /[0-9]|\./;
if ( !regex.test(key) ) {
  theEvent.returnValue = false;
  if(theEvent.preventDefault) theEvent.preventDefault();
}
}
</script>

  <style>
  
 body{   background-color: #808080;}
 
 a.button,a.tp-button,button,input[type="submit"],input[type="reset"],input[type="button"]{display:inline-block;padding:11px 20px;margin-bottom:15px;cursor:pointer;margin-right:7px;border:0;border-radius:0px;position:relative;overflow:hidden;-webkit-box-shadow:inset 0 0 0 1px rgba(0,0,0,.03);box-shadow:inset 0 0 0 1px rgba(0,0,0,.03);background-image:url(../images/box_shadow_button.png);background-repeat:repeat-x}


@media only screen and (min-width: 768px){
	a.button:after,a.tp-button:after,button:after,input[type="submit"]:after,input[type="reset"]:after,input[type="button"]:after{content:"";position:absolute;left:0;top:0;height:100%;width:0;z-index:1;-webkit-transition:all .5s;-moz-transition:all .5s;transition:all .7s;background:rgba(0,0,0,.05)}

	a.button:hover:after,a.tp-button:hover:after,button:hover:after,input[type="submit"]:hover:after,input[type="reset"]:hover:after,input[type="button"]:hover:after{width:100%}
}


.cell {cursor: cell;}
				

 </style>
 
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
 


<script>
$(document).ready(function() {
  $('#plsme').fadeOut(10000); // 5 seconds x 1000 milisec = 5000 milisec
});
</script>

</body>
</html>