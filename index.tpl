{extends file="layout.tpl"}

{block name="content"}
<span id='p'>{include file="assets/sidebar/sidebar.php"}</span> 

   <div class="w3-display-middle w3-center c">
        <span class="w3-text-white w3-jumbo w3-animate-top" style="font-size:90px;font-family:weight;font-family: 'Times New Roman', Times, serif;"><b>MONEY<br>LOVER</b></span>
    </div>
	
 {if $show_table}
	
        <div class="well" id='table'>
            <form action="" method="post" name="Login_Form" onsubmit="return validateForm(this);">


                <tr>
                    <td colspan="2" align="left" valign="top"><h2 style='color:red'><b><i>&nbsp;&nbsp;money lover</i></b>
                        </h2>
                        <h3 style='color:brown'> please enter Username & Password</h3></td>
                    <br>
                </tr>
                <tr>
                    <td align="right" valign="top"><span
                                style='background-color:lightgrey;padding:2px 2px;;border-radius:2px;color:black'><b>Username:</b></span>
                    </td>
                    <td><input name="username" type="text" class="Input"
                               style='background-color:yellow;font-weight:bold;color:blue;'></td>
                </tr>&nbsp;&nbsp;
                <tr>
                    <td align="right" style='background-color:lightgrey;padding:2px 2px;'><span
                                style='background-color:lightgrey;padding:2px 2px;border-radius:2px;color:black'><b>Password:</b></span>
                    </td>
                    <td><input name="password" type="password" id="p1" class="Input"
                               style='background-color:yellow;font-weight:bold;color:blue;'></td>
                </tr>
                <tr>
                    &nbsp;&nbsp;

                    <td>
                        <button name="submite" class='submite' id="btnClick" type="submit" onclick="CountFun();"
                                style='background-color:lightgrey;padding:2px 9px;border-radius:10px;color:black'>
                            <b>Submit</b>
                        </button>
                    </td>
                </tr>

            </form>
        </div>
    {/if}
	                       
	{if !$show_table}
<script type="text/javascript">$(document).ready(function() {   $("#p").show();  }) </script>
    {/if}

    {if $wrong_credentials}
	<script type="text/javascript">
	$(document).ready(function() { bootbox.alert("<h1 style='color:red;text-align:center'>!Error:</h1>....<p style='color:black'>please more care</p>");})</script>
	{/if}
	
	{if $honest_credentials}
	
       <script type="text/javascript"> $(document).ready(function() {  $("#p").show(); $("#table").hide();  bootbox.alert("wellcome");}) </script>
    {/if}

<h2 style='color:white;
    position: absolute;
    bottom: 8px;
    right: 16px;
    font-size: 18px;' class="bottomright">
	{$date}</h2>
{/block}
