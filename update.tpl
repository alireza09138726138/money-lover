{extends file="layout.tpl"}

{block name="content"}

<!-- start body content -->
<div class="container">
        <div class="row">
            
                <center>			<h3 class="font colorwhite">( UPDATE OF COST )</h3> </center>  
           
        </div>
		
		
		<!-- form  submite -->
  <div class="container">
	<form class="form" action="#" method="post" name="calculator">
	 <table class="table"> 
<abbr title='first click bank & Account'><button name="submite" class='btn btn-primary' type="submite" class="button button5">Submit to reamain & last cost</button></abbr>

    <tr class='backlightgrey' >  
		<th class='center font' > <h4 class='colorblack'><label>Bank Name</label></h4></th>  <th class='center'>
			<h4 class='colorblack font' ><label>Account Name</label></h4></th> 
					   </tr>
					   
					   <div class="form-group">
  <tr>
                 {if $show_table}
			{foreach from=$rows item=row}       
 <td class='center'><h1 class='h5 center colorgrey fontsize'><i><span >{$row.bank}</span>
	<input type="radio" name="bank" class="bank cell" id="bank" value="{$row.bank}" required >	</i>	</h1>			
       </td>
        <td class='center'><h1 class='h5' class='colorgrey center fontsize' ><i><span >{$row.Account}</span>
		<input type="radio" name="Account" class="Account cell" id="Account" value="{$row.Account}" required ></i>	</h1>					
           </h1>
		   
			   </td>
                    </div>
					 </tr>
					 {/foreach}
		   {/if}
					 </table >
					 {if !$show_table}
					  <script> bootbox.alert("<h1>error:</h1> <p>because didnt any enter bank nam & account , so enter thats in new account page</p>") </script>
					 {/if}
		
</form>
</div>
 
  
 {if $honest_credentials}
 {foreach from=$ro item=row}
 <form class="form" action="#" method="post" name="">
 
 <div class="container">
 
 
  <!-- reamain cost in php -->
 
  <h3 class='h4'>reamain cost:&nbsp;&nbsp;&nbsp;&nbsp;<span  class='fontsize'><i></h3></i></span>
  

 <h1   class='h5 color00cc00' ><i>{$row.cost}</i> </h1> <span class='h4'> + </span>
 
 
 <!-- last cost in php -->
 <thead>

 <input type="hidden" name="bank" value="{$row.bank}">                
 <input type="hidden" name="Account" value="{$row.Account}">
 <h3 class='h4'>last cost:<span class='fontsize'><i></h3>   	 
 
 <abbr title='at least set 0  (zero)'>
 <input type="number" name="cost" min="0" value="{$row.cost}" id='backcolor ' class='color00cc00  fontstyle'  required></i></span></abbr>
 <h3 class='h4'>Limite (%):<span class='fontsize'><i></h3>
<input type="number" name="Limite" min="0" max="90"  value="{$row.Limite}" id='backcolor ' class='color00cc00  fontstyle' required></i></span>
 <button name="submite1" type="submite1" class='btn btn-primary' class="button button5">Submit new cost</button></thead>

 </form>
 {/foreach}
 {/if}
 
 {if $wrong_credentials}
	<script> bootbox.alert("<h3 class='fontstyle fontweight'>Notice:&nbsp;&nbsp;</h3><h4> <span class='colorred'>ACCOUNT &nbsp;&nbsp;</span>not exist.</h4>") </script>
  {/if}
 
 {if $resultt}
 <script> bootbox.alert("<h3 class='fontstyle fontweight'>cost Updated Successfully.&nbsp;&nbsp;</h3>");</script>
 {/if}
  </table>
 </div>
 {/block}

