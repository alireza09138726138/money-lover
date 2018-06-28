{extends file="layout.tpl"}

{block name="content"}

<!-- start body content -->
<div class="container">
 <div class="row">
   <center>			
    <h3 class="font colorwhite">( CHECK MANAGEMENT )</h3> 
	 </center>  
       </div>
	   
			{foreach from=$rowss item=rowf}
			{if $show_alarm}
			<p class='colorwhite'>...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span  class='colorwhite' >the <b><i>ALARM</b></i> OF&nbsp;<span class='colororange'> <i><b>{$rowf.name}</i></b>&nbsp;</span> CHECK!</p></span>
			{/if}
            {/foreach}			
			
	   
	   <div class="row">
            <div class="col-md-12">
			
                <div class="pull-right">
     <button class="btn btn-primary add_new_user backorange" id="add_new_user"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;Add New</button>
                </div>
                </br></br>
				
				<!-- show table in php -->
   <table class="table table-striped table-responsive" id="usersdata">
    <tr>
<th  class='th center font backblue borderradius'>
 <h5 class='colorwhite'>Bank Name</h5></th>
<th class='th center font backorange borderradius'>
 <h5 class='colorwhite'>Person Name</h5></th> 
<th class='th center font backred borderradius'>
 <h5 class='colorwhite'>Check Number</h5></th> 
<th class='th center font backa65959 borderradius'> 
 <h5 class='colorwhite'>Mony Amount</h5></th>
<th class='th center font backgray borderradius'>
 <h5 class='colorwhite'>Check Kind</h5></th>
<th class='th center font color990000 borderradius'> 
 <h5 class='colorwhite'>Spend</h5></th>
<th class='th center font backblack borderradius'> 
 <h5 class='colorwhite'>Comment</h5></th>
<th class='th center font back8000ff borderradius'>
 <h5 class='colorwhite'> Pay date</h5></th>
<th class='th center font backbf00ff borderradius'>
 <h5 class='colorwhite'>Alarm Pay date</h5></th>
<th class='th center font'><h4 class='colorblack'><b>Action</b></h4></th>
   </tr>
	   
	   
	   {foreach from=$rows item=row}
	   
	   <tr  class="backlightgrey user_{$row.id}">  
  <td class="center fontbold colordate fontstyle"><h5>{$row.name}</h5></td> 
  <td  class="center fontbold colororange fontstyle"><h5>{$row.person}</h5></td>
  <td  class="center fontbold colorred fontstyle"><h5>{$row.number}</h5></td>
  <td  class="center fontbold colora65959 fontstyle"><h5>{$row.Amount}</h5></td>
  <td  class="center fontbold colorgrey fontstyle"><h5>{$row.gender}</h5></td>
  <td  class="center fontbold color99000 fontstyle"><h5>{$row.gender1}</h5></td>
  <td  class="center fontbold colorblack fontstyle"><h5>{$row.Comment}</h5></td> 
  <td  class="colorabf00ffn center fontbold  fontstyle">
  <abbr  title='Notice: Year /month /day'><h5>{$row.pay}</h5></abbr></td> 
  <td  class="colorabf00ff center fontbold  fontstyle"><h5>{$row.pay6}</h5></td>
  <td  class="colorblack center fontbold  fontstyle">
  <abbr  title="Edit detail"> <a href="javascript:void(0);" class="colorblack" onclick="edit_user('{$row.id}')">
  <i class="glyphicon glyphicon-pencil"></i></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;
  <abbr  title='Notice: as soon click your choose will become delete'>
  <a href="javascript:void(0);" class="colorblack" onclick="delete_user('{$row.id}')">
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
    <label class='font'><p class='p colorblack borderradiu backlightgrey' >Bank Name:</p></label>&nbsp;&nbsp;&nbsp;<span class="name error"></span>  
    <input class="color994d00 bord form-control fontstyle" id='name' type="text"  name="name" placeholder="Bank Name" >
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group">
    <label class='font'><p class='p colorblack borderradiu backlightgrey'>Person Name:</p></label>&nbsp;&nbsp;&nbsp;<span class="l_name_error error"></span>
    <input type="text" class="form-control fontstyle colorGreen bord" id="person" name="person" placeholder="Person">
    </div>
 </div>
</div>
	
	<div class="row">
    <div class="col-sm-6">
	
 <div class="form-group">
   <label class='font'><p class='p colorblack borderradiu backlightgrey' > Check Number:</p></label>&nbsp;&nbsp;&nbsp;<span class="number error"></span>
   <input type="number" class="form-control fontstyle colorGreen bord" id="number" name="number" placeholder="number">
   </div>
  </div> 
  
  <div class="col-sm-6">
	<div class="form-group">
    <label class='font'><p class='p colorblack borderradiu backlightgrey' >Mony Amount:</p></label>&nbsp;&nbsp;&nbsp;<span class="Amount error"></span>
    <input type="number" class="form-control fontstyle colorGreen bord" id="Amount" name="Amount" placeholder="amount" >
    </div>
  </div>
</div>   
  
  <div class="row">
     <div class="col-sm-11">
	<div class="form-group">
    <label class='font'><p class='p colorblack borderradiu backlightgrey' > Comment:</p></label>&nbsp;&nbsp;&nbsp;<span class="Comment error"></span>
    <textarea type="text" class="form-control fontstyle colorGreen bord " id="Comment" name="Comment" placeholder="Comment..." ></textarea> 
    </div>
  </div>
</div>

<div class="row">
    <div class="col-sm-6">
<div class="form-group">
    <label class='font'><p class='p colorblack borderradiu backlightgrey'> Pay date:</p></label>&nbsp;&nbsp;&nbsp;<span class="pay error"></span>
	
    <div class="row">
	<div class="col-sm-12">
	 
	 <abbr  title="Notice: month/day/Year">
	 <input type="date" onkeypress="return isNumeric(event)" class="form-control pay colorblack borderradiu backlightgrey" id="pay" name="pay"  value="2014-02-09" >
    </abbr>
	</div>	
   </div>
  </div>	
</div>

<div class="col-sm-6">
		<div class="form-group">
    <label class='font'><p class='p colorblack borderradiu backlightgrey'>Alarm Pay date:</p></label>
	
<abbr  title="enter alarm date">
	<input type="date" onkeypress="return isNumeric(event)" class="form-control  colororange borderradiu backlightgrey" id="pay6" name="pay6" class="pay6" value="2014-02-09" >
	
    </abbr>
	</div>
   </div>		
		</div>	
			
			<div class="row">
 <div class="col-sm-6">
					
 <div class="form-group">
 <label for="" class='p font colorblack borderradiu backlightgrey'>Check Kind:&nbsp;&nbsp;</label><br>
 <input type="radio" name="gender" class="gender cell" value="Check out "> Check out 
 <input type="radio" name="gender" class="gender cell" value="Check in"> Check in
 </div>
</div>

<div class="col-sm-6">
<div class="form-group">
<label for="" class='p font colorblack borderradiu backlightgrey'>Spend:&nbsp;&nbsp;</label><br>
<input type="radio" name="gender1" class="gender1 cell" value="Check pass  "> Check pass  
<input type="radio"  name="gender1" class="gender1 cell" value="Check nopass"> Check nopass
   </div>
  </div>
</div>
 
  <input type="hidden" id="action" name="action" value="add">
  <input type="hidden" id="id" name="id" value="">
  &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" id="submit" class="btn btn-primary backorange">Submit</button>
  &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-default backgray" data-dismiss="modal">Close</button>  
   </form>               
   </div>
          
        </div>
    </div>
</div>

 <!-- Script for add new data -->
  <script type="text/javascript" src="assets/js/Check.js"></script>

	    {/block}
