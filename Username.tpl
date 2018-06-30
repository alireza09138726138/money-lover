{extends file="layout.tpl"}

{block name="content"}

<!-- start body content -->
<div class="container">
        <div class="row">
            
                <center>			<h3 class="font colorwhite" >( PASSWORD CREATE )</h3> </center>  
           
        </div>
		
		<div class="row">
            <div class="col-md-12">
                <div class="pull-right">
				<!-- button for create password -->
                    <button class="btn btn-primary add_new_user" id="add_new_user"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;create password</button>
                </div>
                </br></br>
				
                <table class="table table-striped table-responsive" id="usersdata">
                    <tr class='backblue'>
                        <th class='backlightgrey center font borderradius'>Password</th>
                        <th class='backlightgrey center font borderradius' >username</th>
                        <th class='backlightgrey center font borderradius'>Action</th>
                    </tr>
					{foreach from=$rows item=row}
					<tr class="user_{$row.id}">
                        <td class='center '><h3 class='colorwhite backgreen padding' ><i>{$row.username}</i></h3></td>
                        <td class='center ' ><h3 class='colorwhite backgreen padding'><i>{$row.password}</i></h3></td>
                        <td class='center'><h3 class='colorwhite backgreen padding'  >
                            <a href="javascript:void(0);" class='colorlightgrey' onclick="edit_user('{$row.id}')"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="javascript:void(0);" class='colorlightgrey' onclick="delete_user('{$row.id}')"><i class="glyphicon glyphicon-trash"></i></a>
                        </h3>
					  </td>
                   </tr>
					{/foreach}
					 </table>
            </div>
        </div>
    </div>    
	
	
	 <!-- modal for create password -->
<div class="modal fade" id="add_new_user_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            
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
   <script type="text/javascript" src="assets/js/username.js"></script>  
 {/block}
