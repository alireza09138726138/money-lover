<!DOCTYPE html>
<html lang="en">
<head>
  <title>Money lover</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="picture/pexels-photo-221174.png.jpg"/>
  <?php
include("assets/asset link-script/asset.php");
 include("assets/sidebar/sidebar.php");
include("headerr.php");
?>	
	</head>
	
<body style=' background-color: #808080;'>
    <div class="container">
        <div class="row">
            
                <center>			<h3 style='color:white;font-family: "Times New Roman", Times, serif;'>( CHECK MANAGEMENT )</h3> </center> 
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
					$serialnumber=0;
                     $counter=0;
					while($data = mysqli_fetch_array($query))
                        { 
					$serialnumber++;

					$name =$data['name'];  echo "<p id='' style='color:white'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='color:white;'>the <b><i>ALARM</b></i> OF<span style='color:orange;'> $name</span> CHECK!</p></span>"; $counter++;
					
					}
				}       
					
					?>
				</div>
        </div>
		
        <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
     <button class="btn btn-primary" class="add_new_user" id="add_new_user" style=' background-color: orange;'><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;Add New</button>
                </div>
                </br></br>
				
				<!-- show table in php -->
   <table class="table table-striped table-responsive" id="usersdata">
    <tr>
<th style='text-align:center;font-family: "Times New Roman", Times, serif; background-color:blue;border-radius: 15px 50px 30px 5px;' class='th'><h5 style='color:white;'>Bank Name</h5></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:orange;border-radius: 15px 50px 30px 5px;' class='th'><h5 style='color:white;'>Person Name</h5></th> 
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:red;border-radius: 15px 50px 30px 5px;' class='th'><h5 style='color:white;'>Check Number</h5></th> 
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:#a65959;border-radius: 15px 50px 30px 5px;' class='th'> <h5 style='color:white;'>Mony Amount</h5></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:grey;border-radius: 15px 50px 30px 5px;' class='th'> <h5 style='color:white;'>Check Kind</h5></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:#990000;border-radius: 15px 50px 30px 5px;' class='th'> <h5 style='color:white;'>Spend</h5></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:black;border-radius: 15px 50px 30px 5px;' class='th'> <h5 style='color:white;'>Comment</h5></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:#8000ff;border-radius: 15px 50px 30px 5px;' class='th'> <h5 style='color:white;'> Pay date</h5></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:#bf00ff;border-radius: 15px 50px 30px 5px;' class='th'><h5 style='color:white;'>Alarm Pay date</h5></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;' class='th'><h4 style='color:black;'>Action</h4></th>
   </tr>

 
                    <?php 
                    
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
  <td style='text-align:center;font-weight: bold;color:blue;font-style: italic;'><h5><?php echo $data['name']; ?><h5></td> 
  <td style='text-align:center;font-weight: bold;color:orange;font-style: italic;'><h5><?php echo $data['person']; ?><h5></td>
  <td style='text-align:center;font-weight: bold;color:red;font-style: italic;'><h5><?php echo $data['number']; ?><h5></td>
  <td style='text-align:center;font-weight: bold;color:#a65959;font-style: italic;'><h5><?php echo $data['Amount']; ?><h5></td>
  <td style='text-align:center;font-weight: bold;color:grey;font-style: italic;'><h5><?php echo $data['gender']; ?><h5></td>
  <td style='text-align:center;font-weight: bold;color:#990000;font-style: italic;'><h5><?php echo $data['gender1']; ?><h5></td>
  <td style='text-align:center;font-weight: bold;color:black;font-style: italic;'><h5><?php echo $data['Comment']; ?><h5></td> 
  <td style='text-align:center;font-weight: bold;color:#8000ff;font-style: italic;'><abbr  title='Notice: Year /month /day'><h5><?php echo $data['pay']; ?><h4></td></abbr> 
  <td style='text-align:center;font-weight: bold;color:#bf00ff;font-style: italic;'><h5><?php echo $data['pay6']; ?><h5></td>
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
  <script type="text/javascript" src="assets/js/Check.js"></script>

	<!-- the end -->	
 </body>
</html>
