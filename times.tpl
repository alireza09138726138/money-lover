{extends file="layoutall.tpl"}

{block name="content"}

<!-- start body content -->
<div class="container">
        <div class="row">
            
                <center>			<h3 style='color:white;font-family: "Times New Roman", Times, serif;'>( EXPENDITURE OF BETWEEN TIMES )</h3> </center>  
           
        </div>
		
		
		<!-- form to date -->
	<div class="pull-left">
	<div class="well" style='border:1px solid hsl(0, 100%, 25%)' >
	<form class="form" action="#" method="post" name="calculator">
	
	
<span style='color:#663399' class='h4'><b>startdate:</b></span>
<input class="btn2" type="date" value=""  name="startDate" placeholder="Enter YEAR" id='button' onclick="showDiv('toggle2')" style=' background-color: #ffd984;color:rgb(0, 0, 0); font-weight: bold;font-style: italic;' required>

<span style='color:#663399' class='h4'><b>enddate:</b></span>
<input class="btn2" type="date" value=""  name="endDate" placeholder="Enter YEAR" id='button' onclick="showDiv('toggle2')" style=' background-color: #ffd984;color:rgb(0, 0, 0); font-weight: bold;font-style: italic;' required>


<button name="submite" type="submit" class="button button5" style='background-color:gray;color:white'>Submit</button>

   </div>
    </div>
     </div>

       </form>
	   
	   
	   <!-- table to date -->
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