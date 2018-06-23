{extends file="layoutall.tpl"}

{block name="content"}

<!-- start body content -->
<div class="container">
 <div class="row">
            
   <center>			
    <h3 style='color:white;font-family: "Times New Roman", Times, serif;'>( COST MANAGEMENT )</h3> 
	 </center>  
       </div>
	   
	    <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
                    <button class="btn btn-primary" class="add_new_user" id="add_new_user"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;Add New</button>
                </div>
				    </br></br>
                 <table class="table table-striped table-responsive" id="usersdata" style='width: 70%;border-radius: 15px 50px 30px 5px;'>
                    <tr style="background-color: lightgrey;">
                        <th style="font-family: 'Times New Roman', Times, serif;border-radius: 0 50px 30px 5px;">Product Name</th>
						<th style="font-family: 'Times New Roman', Times, serif;border-radius: 15px 50px 30px 5px;">Amount</th>
						<th style="font-family: 'Times New Roman', Times, serif;;text-align:center;border-radius: 15px 50px 30px 5px;">Expenditure kind</th>
						<th style="font-family: 'Times New Roman', Times, serif;;text-align:center;border-radius: 15px 50px 30px 5px;">Price</th>
                        
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

        <tr style='  background-color: lightgrey;'>  
		<th style='text-align:center;font-family: "Times New Roman", Times, serif;'> <h3 style='color:red;font-family: "Times New Roman", Times, serif;'>
		<label>Bank Name</label>
		</h3>
		 </th> 
		<th style='text-align:center;'>
		<h3 style='color:black;font-family: "Times New Roman", Times, serif;'><label>Account Name</label>
		</h3>
		 </th> 
		  </tr>
					   
		<div class="form-group">
		<tr>
              {foreach from=$rows item=row}
         <td style='text-align:center;'>
		 <p class='h5'><i><span>{$row.bank}</span>
		 <input type="radio" name="bank" class="bank cell" id="bank" value='{$row.bank}' required ></i>					
           </p>
		    </td>
			
         <td style='text-align:center;'>
		 <p class='h5'><i><span>{$row.Account}</span>
		 <input type="radio" name="Account" class="Account cell" id="Account" value='{$row.Account}' required ></i>
		   </p>
			</td>
             </div>
			  </tr>
					{/foreach}
		</table >
                   
		<div class="form-group">
        <label style='font-family: "Times New Roman", Times, serif'>
		<p  style='color:black; padding: 2px 8px;border-radius: 4px;; background-color:lightgrey;' >Product Name:</p>
		 </label>&nbsp;&nbsp;&nbsp;
		  <span class="name error"></span> 
                        
		<input type="text" class="form-control" id="name" name="name" placeholder="enter name of product" style='background-color: lightgrey;border:2px solid grey;color:blue;font-family:italic;' required>
          </div>
 
         <div class="form-group">
         <label style='font-family: "Times New Roman", Times, serif;'><p style='color:black; padding: 2px 8px;border-radius: 4px;; background-color:lightgrey;'>Explain to buy:</p></label>&nbsp;&nbsp;&nbsp;<span class="buy error"></span>
         <textarea type="text" class="form-control" id="buy" name="buy" placeholder="buy" style='background-color: lightgrey;border:2px solid grey;color:blue;font-family:italic;'>
	      </textarea>
           </div>
 
        <div class="row">
         <div class="col-md-6">
		 
            <div class="form-group">
            <label for="" style='font-family: "Times New Roman", Times, serif;color:black; padding: 2px 8px;border-radius: 4px;; background-color:lightgrey;'>Expenditure kind:&nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<span class="qty error"></span><BR>
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
			 
             <label style='font-family: "Times New Roman", Times, serif;color:black; padding: 2px 8px;border-radius: 4px;; background-color:lightgrey;'>Price:</label>&nbsp;&nbsp;&nbsp;<span class="Price error" ></span>
            <input type="number" class="form-control" id="Price" name="Price" placeholder="Price" style='background-color: lightgrey;border:2px solid grey;color:blue;font-family:italic;' required><br>
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