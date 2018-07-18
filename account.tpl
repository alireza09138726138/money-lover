{extends file="layout.tpl"}

{block name="content"}

<!-- start body content -->
<div class="container">
 <div class="row">
            
   <center>			
    <h3 class="font colorwhite">( BANK MANAGEMENT )</h3> 

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
						
                <table class="table table-striped table-responsive" id="usersdata"  >
                    <tr class='center backgray'>
                  <th class='center font backa65959 '><h3 class='colorwhite'>Bank</h3></th> 
                   <th class='center font backgreen'><h3 class='colorwhite'>Account</h3></th>
                    <th class='center font backbf00ff'><h3 class='colorwhite'>Action</h3></th>
                     </tr>
					  
					  {foreach from=$rows item=row}
					 
					  
                    <tr class='backlightgrey bordorange user_{$row.id}' >
                       <td class='center fontbold colorblue'><h3><i><b>{$row.bank}</b></i></h3></td>
						<td class='center fontbold colorred'><h3><i><b>{$row.Account}</b></i></h3></td>
                      
                        <td class='center colorblue'><h3>
                         &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="javascript:void(0);" onclick="delete_user('{$row.id}');" ><i class="glyphicon glyphicon-trash "></i></a></h3>
                        </td>
                    </tr>
                  {/foreach}
                      </table>
				  
				 
            </div>
        </div>
    </div>    

 
  <!-- modal form -->
<div class="modal fade" id="add_new_user_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <form method="POST" role="form">
 
                    <div class="form-group"> 
                        <label class='font'><p  class='colorblack borderradiu backlightgrey padddd'>Bank:</p></label>&nbsp;&nbsp;&nbsp;<span class="bank error"></span>
                        <input type="text" class="form-control backlightgrey colordate fontstyle bor" id="bank" name="bank" placeholder="bank">
                         </div>
 
                <div class="form-group">
                       <label class='font'><p  class='colorblack borderradiu backlightgrey padddd'> Account:</p></label>&nbsp;&nbsp;&nbsp;<span class="Account error"></span>
                        <input type="text" class="form-control backlightgrey colordate fontstyle bor" id="Account" name="Account" placeholder="Account" >
                         </div>
					
					  <div class="form-group">
                       <label class='font'><p class='colorblack borderradiu backlightgrey padddd'>Cost:</p></label>&nbsp;&nbsp;&nbsp;<span class="cost error"></span>
					    <input type="number"  min="1" id="cost" name="cost" placeholder="cost" class="form-control backlightgrey colordate fontstyle bor">
						
                                                
				         </div>
				   
				   <div class="form-group">
                       <label  class='font'><p  class='colorblack borderradiu backlightgrey padddd'>
					   Limit for buy(%?):</p></label>&nbsp;&nbsp;&nbsp;<span class="Limite error"></span>
                        
					   <input type="number"  min="1" max="99" id="Limite" name="Limite" placeholder="Limit" class="form-control backlightgrey colordate fontstyle bor">
                     
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
    <script type="text/javascript" src="assets/js/account.js"></script>
 
  



{/block}

