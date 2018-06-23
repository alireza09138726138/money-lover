{extends file="layoutall.tpl"}

{block name="content"}

<!-- start body content -->
<div class="container">
        <div class="row">
            
                <center>			<h3 style='color:white;font-family: "Times New Roman", Times, serif;'>( UPDATE OF COST )</h3> </center>  
           
        </div>
		
		
		<!-- form  submite -->
  <div class="container">
	<form class="form" action="#" method="post" name="calculator">
	 <table class="table"> 
<abbr title='first click bank & Account'><button name="submite" class='btn btn-primary' type="submite" class="button button5">Submit to reamain & last cost</button></abbr>

    <tr style='  background-color: lightgrey;'>  
		<th style='text-align:center;font-family: "Times New Roman", Times, serif;'> <h4 style='color:black;'><label>Bank Name</label></h4></th>  <th style='text-align:center;'>
			<h4 style='color:black;font-family: "Times New Roman", Times, serif;'><label>Account Name</label></h4></th> 
					   </tr>
					   
					   <div class="form-group">
  <tr>
                 {if $show_table}
			{foreach from=$rows item=row}       
 <td style='text-align:center;'><h1 class='h5' style='color: grey;text-align: center;font-size:24px;'><i><span >{$row.bank}</span>
	<input type="radio" name="bank" class="bank cell" id="bank" value="{$row.bank}" required >	</i>	</h1>			
       </td>
        <td style='text-align:center;'><h1 class='h5' style='color: grey;text-align: center;font-size:24px;'><i><span >{$row.Account}</span>
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
 
  <h3 class='h4'>reamain cost:&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-size:24px'><i></h3></i></span>
  

 <h1   class='h5' style='color:#00cc00'><i>{$row.cost}</i> </h1> <span class='h4'> + </span>
 
 
 <!-- last cost in php -->
 <thead>

 <input type="hidden" name="bank" value="{$row.bank}">                
 <input type="hidden" name="Account" value="{$row.Account}">
 <h3 class='h4'>last cost:<span style='font-size:24px'><i></h3>   	 
 
 <abbr title='at least set 0  (zero)'>
 <input type="number" name="cost" min="0" value="{$row.cost}" style=' background-color: #ffd984;color:#00cc00; font-weight: bold;font-style: italic;' required></i></span></abbr>
 <h3 class='h4'>Limite (%):<span style='font-size:24px'><i></h3>
<input type="number" name="Limite" min="0" max="90"  value="{$row.Limite}" style=' background-color: #ffd984;color:#00cc00; font-weight: bold;font-style: italic;'required></i></span>
 <button name="submite1" type="submite1" class='btn btn-primary' class="button button5">Submit new cost</button></thead>

 </form>
 {/foreach}
 {/if}
 
 {if $wrong_credentials}
	<script> bootbox.alert("<h3 style='font-weight:bold;font-style:italic;'>Notice:&nbsp;&nbsp;<h3><h4> <span style='color:red'>ACCOUNT &nbsp;&nbsp;</span>not exist.</h4>") </script>
  {/if}
 
 {if $resultt}
 <script> bootbox.alert("<h3 style='font-weight:bold;font-style:italic;'>cost Updated Successfully.&nbsp;&nbsp;<h3>");</script>
 {/if}
  </table>
 </div>
 {/block}