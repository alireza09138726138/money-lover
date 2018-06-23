{extends file="layoutall.tpl"}

{block name="content"}

<!-- start body content -->
<div class="container">
 <div class="row">
   <center>			
    <h3 style='color:white;font-family: "Times New Roman", Times, serif;'>( CHECK MANAGEMENT )</h3> 
	 </center>  
       </div>
	   
			{foreach from=$rowss item=rowf}
			{if $show_alarm}
			<p id='' style='color:white'>...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='color:white;'>the <b><i>ALARM</b></i> OF&nbsp;<span style='color:orange;'> <i><b>{$rowf.name}</i></b>&nbsp;</span> CHECK!</p></span>
			{/if}
            {/foreach}			
			
	   
	   <div class="row">
            <div class="col-md-12">
			
                <div class="pull-right">
     <button class="btn btn-primary add_new_user" id="add_new_user" style=' background-color: orange;'><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;Add New</button>
                </div>
                </br></br>
				
				<!-- show table in php -->
   <table class="table table-striped table-responsive" id="usersdata">
    <tr>
<th style='text-align:center;font-family: "Times New Roman", Times, serif; background-color:blue;border-radius: 15px 50px 30px 5px;' class='th'>
<h5 style='color:white;'>Bank Name</h5></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:orange;border-radius: 15px 50px 30px 5px;' class='th'>
<h5 style='color:white;'>Person Name</h5></th> 
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:red;border-radius: 15px 50px 30px 5px;' class='th'>
<h5 style='color:white;'>Check Number</h5></th> 
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:#a65959;border-radius: 15px 50px 30px 5px;' class='th'> 
<h5 style='color:white;'>Mony Amount</h5></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:grey;border-radius: 15px 50px 30px 5px;' class='th'>
 <h5 style='color:white;'>Check Kind</h5></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:#990000;border-radius: 15px 50px 30px 5px;' class='th'> 
<h5 style='color:white;'>Spend</h5></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:black;border-radius: 15px 50px 30px 5px;' class='th'> 
<h5 style='color:white;'>Comment</h5></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:#8000ff;border-radius: 15px 50px 30px 5px;' class='th'>
 <h5 style='color:white;'> Pay date</h5></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;background-color:#bf00ff;border-radius: 15px 50px 30px 5px;' class='th'>
<h5 style='color:white;'>Alarm Pay date</h5></th>
<th style='text-align:center;font-family: "Times New Roman", Times, serif;' class='th'><h4 style='color:black;'><b>Action</b></h4></th>
   </tr>
	   
	   
	   {foreach from=$rows item=row}
	   
	    <tr style='  background-color: lightgrey;' class="user_{$row.id}">  
  <td style='text-align:center;font-weight: bold;color:blue;font-style: italic;'><h5>{$row.name}</h5></td> 
  <td style='text-align:center;font-weight: bold;color:orange;font-style: italic;'><h5>{$row.person}</h5></td>
  <td style='text-align:center;font-weight: bold;color:red;font-style: italic;'><h5>{$row.number}</h5></td>
  <td style='text-align:center;font-weight: bold;color:#a65959;font-style: italic;'><h5>{$row.Amount}</h5></td>
  <td style='text-align:center;font-weight: bold;color:grey;font-style: italic;'><h5>{$row.gender}</h5></td>
  <td style='text-align:center;font-weight: bold;color:#990000;font-style: italic;'><h5>{$row.gender1}</h5></td>
  <td style='text-align:center;font-weight: bold;color:black;font-style: italic;'><h5>{$row.Comment}</h5></td> 
  <td style='text-align:center;font-weight: bold;color:#8000ff;font-style: italic;'><abbr  title='Notice: Year /month /day'><h5>{$row.pay}</h5></abbr></td> 
  <td style='text-align:center;font-weight: bold;color:#bf00ff;font-style: italic;'><h5>{$row.pay6}</h5></td>
  <td style='text-align:center;font-family: ;color:dark grey;font-style: italic;'>
  <abbr  title="Edit detail"> <a href="javascript:void(0);" style="color:black" onclick="edit_user('{$row.id}')">
  <i class="glyphicon glyphicon-pencil"></i></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;
  <abbr  title='Notice: as soon click your choose will become delete'>
  <a href="javascript:void(0);" style="color:black" onclick="delete_user('{$row.id}')">
   <i class="glyphicon glyphicon-trash"></i></a> </abbr>
    </td>
    </tr>
                   {/foreach}
                </table>
            </div>
        </div>
	</div>
		
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
    </div>
  </div>
</div>

<div class="row">
    <div class="col-sm-6">
<div class="form-group">
    <label style='font-family: "Times New Roman", Times, serif'><p class='p' style='color:black;border-radius: 4px;; background-color:lightgrey;'> Pay date:</p></label>&nbsp;&nbsp;&nbsp;<span class="pay error"></span>
	
    <div class="row">
	<div class="col-sm-12">
	 
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

	    {/block}