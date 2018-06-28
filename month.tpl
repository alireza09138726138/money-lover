{extends file="layout.tpl"}

{block name="content"}

<!-- start body content -->
<div class="container">
 <div class="row">
            
   <center>
   <h3 class="font colorwhite">( EXPENDITURE OF YEAR, MONTH )</h3>
    </center>  
      </div>
	  
	  <!-- form -->
	<div class="pull-left">
	<div class="well" id='bord' >
	<form class="form" action="#" method="post" name="calculator">
	
<span class="colordate" ><b>YEAR:</b></span>
<input class="btn2 input" type="number" value=""  name="YEAR" placeholder="Enter YEAR" id='button' onclick="showDiv('toggle')"  required>
&nbsp;&nbsp;

<span class="colordate" > <b>MONTH:</b></span>
<input class="btn1 input" type="number" value="" name="MONTH" placeholder="Enter MONTH" onclick="showDiv('toggle1')" required>
&nbsp;&nbsp;&nbsp;&nbsp;



<button name="submite" type="submit" class="button button5" >Submit</button>

 

  </form>
   </div>
      </div>
       </div>
        
        
		 
		 



{if $wrong_credentials}
 <div class="container">
	  <h3  id='plsme' class='colorwhite'><i>ERROR</i> because your DATE n't exist</h3>
	  </div>
	{/if}
<!-- table to show product -->
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
				<span class='color990000'>
				 <b><i>{$sum}</b></i>
				  </span>
				</div>
    		</div>
    	</div>
	  {/if}
	</div>
	 </table>
		
		 {/block}
