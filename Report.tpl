{extends file="layoutall.tpl"}

{block name="content"}

<!-- start body content -->
<div class="container">
 <div class="row">
            
   <center>
   <h3 style='color:white;font-family: "Times New Roman", Times, serif;'>( EXPENDITURE TO CASH OR BANKY )</h3>
    </center>  
      </div>
	  
	  
	<div class="pull-left">
	<div class="well" style='border:1px solid hsl(0, 100%, 25%)' >
	<form class="form" action="#" method="post" name="calculator">
	
<table>
<th style="color:black;padding: 2px 1px;background-color:  lightgrey;">&nbsp;&nbsp;Report to expenditure of kind:</th>
<tr>
 {if $show_table}
          
				{foreach from=$rowss item=row}
                        
                 <th style='text-align:center;'><h2 class='h5' style='color:grey'><b><span >{$row.Comment}</span></b></h2>
				 <input type="radio" name="product" class="bank cell" id="product" value="{$row.Comment}" required >					
                  </th>
				{/foreach}
				{/if}
				
				</tr>
                    </div> 
                 </table>
             </div>
           </div>
  &nbsp;
<button name="submite" type="submit" class="button " style='padding:2px 10px; background-color: lightgrey; border: 1px solid red;color: blue;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);'>Submit</button><br><br>
  
</form>

<div class="container">

    		<table class="table table-striped table-responsive" id="usersdata">
			{if $honest_credentials}
				<tr>
				     <th  id='th' style='text-align:center;color:;font-family: "Times New Roman", Times, serif;' class='th'><h3>Bank Name</h3></th> 
                    <th  id='th' style='text-align:center;color:;font-family: "Times New Roman", Times, serif;' class='th'><h3>Account</h3></th> 					 
    				<th  id='th' style='text-align:center;color:;font-family: "Times New Roman", Times, serif;' class='th'><h3>Product Name</h3></th>
    				<th  id='th' style='text-align:center;font-family: "Times New Roman", Times, serif;' class='th'><h3>Price($)</h3></th>
    				<th  id='th' style='text-align:center;font-family: "Times New Roman", Times, serif;' class='th'><h3>Amount</h3></th>
					<th  id='th' style='text-align:center;font-family: "Times New Roman", Times, serif;' class='th'><h3>Expenditure kind</h3></th>
					<th  id='th' style='text-align:center;font-family: "Times New Roman", Times, serif;' class='th'><h3>Date</h3></th>
					
				
    			</tr>
		
			{foreach from=$rows item=row}
  
   <tr>
			<td style=' background-color: #ffd984;'><p style='text-align:center;color:blue;font-size:19px'><b><i>{$row.bank}</i></b></p></td>  
			<td style=' background-color: #ffd984;'><p style='text-align:center;color:#994d00;font-size:19px'><b><i>{$row.Account}</i></b></p></td>
    		<td style=' background-color: #ffffb7;'><p style='text-align:center;color:	#009973;;font-size:19px'><b><i>{$row.name}</i></b></p></td>
			<td style=' background-color: #ffffb7;'><p style='text-align:center;color:grey;font-size:19px'><b>{$row.Price}</b></p></td>
    		<td style=' background-color: #ffffb7;'><p style='text-align:center;color:Green;font-size:19px'><b>{$row.amount}</b></p></td>
			<td style=' background-color: #ffffb7;'> <p style='text-align:center;color:#ff9800;font-size:19px'><b>{$row.Comment}</b></p></td>
			<td style=' background-color: #ffffb7;'><p style='text-align:center;color:#000000;font-size:19px'><b>{$row.year}-{$row.month}-{$row.day}</b></p></td>
 </tr>
 {/foreach}
 
		 <!-- sum(Price) php -->
		<div class="pull-right">
    		<div class="span">
    			<div class="alert alert-success"><i class="icon-credit-card icon-large"></i>&nbsp;Total Price($):&nbsp;<span style='color:#990000';><b><i>{$sum}</b></i></span>
				</div>
    		</div>
    	 </div>
	  {/if}
	 </div>
 </table>
{/block}