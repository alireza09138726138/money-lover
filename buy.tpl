{extends file="layout.tpl"}

{block name="content"}

<!-- start body content --> 
<div class="container">
 <div class="row">
            
   <center>			
    <h3 class="font colorwhite">( COST MANAGEMENT )</h3> 
	 </center>  
       </div>
	   
	    <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
                    <button class="btn btn-primary" class="add_new_user" id="add_new_user"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;Add New</button>
                </div>
				    </br></br>
                 <table class="table table-striped table-responsive tablee" id="usersdata">
                    <tr id='backlightgrey'>
                        <th class="font center bor" >Product Name</th>
						<th class="font center bor">Amount</th>
						<th class="font center bor">Expenditure kind</th>
						<th class="font center bor">Price</th>
                        
                        <th>Action</th>
                    </tr>
 
                   
                </table>
            </div>
        </div>
    </div>
	
	<div class="modal fade" id="add_new_user_modal">
    <div class="modal-dialog">
        <div class="modal-content">
           
            <div class="modal-body">
                <form method="POST" role="form">
 
 			 <table class="table"> 

        <tr class='backlightgrey'>  
		<th class='center font'> <h3 class='colorred font'>
		<label>Bank Name</label>
		</h3>
		 </th> 
		<th class='center'>
		<h3 class='colorblack font'><label>Account Name</label>
		</h3>
		 </th> 
		  </tr>
					   
		<div class="form-group">
		<tr>
              {foreach from=$rows item=row}
         <td class='center'>
		 <p class='h5'><i><span>{$row.bank}</span>
		 <input type="radio" name="bank" class="bank cell" id="bank" value='{$row.bank}' required ></i>					
           </p>
		    </td>
			
         <td class='center'>
		 <p class='h5'><i><span>{$row.Account}</span>
		 <input type="radio" name="Account" class="Account cell" id="Account" value='{$row.Account}' required ></i>
		   </p>
			</td>
             </div>
			  </tr>
					{/foreach}
		</table >
                   
		<div class="form-group">
        <label class='font'>
		<p  class='colorblack padddd borderradiu backlightgrey' >Product Name:</p>
		 </label>&nbsp;&nbsp;&nbsp;
		  <span class="name error"></span> 
                        
		<input type="text" class="form-control fontstyle colordate backlightgrey borderradiu" id="name" name="name" placeholder="enter name of product"  required>
          </div>
 
         <div class="form-group">
         <label class='font'><p class='colorblack padddd borderradiu backlightgrey'>Explain to buy:</p></label>&nbsp;&nbsp;&nbsp;<span class="buy error"></span>
         <textarea type="text" class="form-control fontstyle colorGreen bord" id="buy" name="buy" placeholder="buy" >
	      </textarea>
           </div>
 
        <div class="row">
         <div class="col-md-6">
		 
            <div class="form-group">
            <label for="" class='font colorblack borderradiu padddd backlightgrey'>Expenditure kind:&nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<span class="qty error"></span><BR>
			<p class='h5'><i><input type="radio" name="gender" class="gender cell" value="cash" id="realize"> cash</p></i>
            <p class='h5'><i><input type="radio" name="gender" class="gender cell" value="bank" id="bank1"> bank</p></i>
              </div>
					
			<input type="hidden" id="action" name="action" value="add">
            <input type="hidden" id="id" name="id" value="">
            <button type="button" id="submit" class="btn btn-warning" onclick="myFunction()">Submit</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			 </div>
					
			<div class="col-md-4">		
			 <div class="form-group">
			 
             <label class='font colorblack padddd borderradiu backlightgrey'>Price:</label>&nbsp;&nbsp;&nbsp;<span class="Price error" ></span>
            <input type="number" class="form-control" id="Price" name="Price" placeholder="Price" 
			class='backlightgrey colorblue bor fontstyle' required><br>
			  </div>
			   </div>
				</div>
                 </form>               
                  </div>                        
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>

 <!-- Script for add new data -->
  <script type="text/javascript" src="assets/js/buy.js"></script>
 
 {/block}

