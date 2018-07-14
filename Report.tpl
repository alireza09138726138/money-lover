{extends file="layout.tpl"}

{block name="content"}

<!-- start body content -->
<div class="container">
 <div class="row">
            
   <center>
   <h3 class="font colorwhite">( EXPENDITURE TO CASH OR BANKY )</h3>
    </center>  
      </div>
	  
	  
	<div class="pull-left">
	<div class="well" id='bord' >
	<form class="form" action="#" method="post" name="calculator">
	
<table>
<th class="backlightgrey padd colorblack" >&nbsp;&nbsp;Report to expenditure of kind:</th>
<tr>
 {if $show_table}
          
				{foreach from=$rowss item=row}
                        
                 <th class="center"><h2 class='h5 colorgrey' ><b><span >{$row.Comment}</span></b></h2>
				 <input type="radio" name="product" class="bank cell" id="product" value="{$row.Comment}" required >					
                  </th>
				{/foreach}
				
				{/if}
			
				</tr>
				</div>
					
                 </table>
				 <button class="button colordate border boxshadow"  name="submite" type="submit"  style=''>Submit</button>
             </div>
           </div>
   
</form>

<div class="container">

    		<table class="table table-striped table-responsive" id="usersdata">
			{if $honest_credentials}
				<tr>
				     <th  id='th'  class='th center backDCDCDC'><h3>Bank Name</h3></th> 
                    <th  id='th'  class='th center backDCDCDC'><h3>Account</h3></th> 					 
    				<th  id='th'  class='th center backDCDCDC'><h3>Product Name</h3></th>
    				<th  id='th'  class='th center backDCDCDC'><h3>Price($)</h3></th>
    				<th  id='th'  class='th center backDCDCDC'><h3>Amount</h3></th>
					<th  id='th'  class='th center backDCDCDC'><h3>Expenditure kind</h3></th>
					<th  id='th'  class='th center backDCDCDC'><h3>Date</h3></th>
				
				
    			</tr>
		
			{foreach from=$rows item=row}
  
   <tr>
		    <td id='backcolor'><p class='fontt colordate center'    ><b><i>  {$row.bank}   </i>                 </b></p></td>  
			<td id='backcolor'><p class='fontt color994d00 center'  ><b><i>  {$row.Account}</i>                 </b></p></td>
    		<td id='backcolorr' ><p class='fontt color009973 center'><b><i>  {$row.name}   </i>                 </b></p></td>
			<td id='backcolorr' ><p class='fontt colorgrey center'  ><b>     {$row.Price}                       </b></p></td>
    		<td id='backcolorr' ><p class='fontt colorGreen center' ><b>     {$row.amount}                      </b></p></td>
			<td id='backcolorr' ><p class='fontt colorff9800 center'><b>     {$row.Comment}                     </b></p></td>
			<td id='backcolorr' ><p class='fontt color000000 center'><b>     {$row.year}-{$row.month}-{$row.day}</b></p></td>
  </tr>
 {/foreach}
 
		 <!-- sum(Price) php -->
		<div class="pull-right">
    		<div class="span">
    			<div class="alert alert-success">
				<i class="icon-credit-card icon-large"></i>
				&nbsp;Total Price($):&nbsp;
				<span class='color9900000'>
				 <b><i>{$sum}</b></i>
				  </span>
				</div>
    		</div>
    	</div>
	  {/if}
	 </div>
 </table>
{/block}

