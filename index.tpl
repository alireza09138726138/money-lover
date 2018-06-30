<html>

<head>
    <title>{block name="title"}Money Loverh{/block}</title>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    {include file="assets/asset link-script/asset.php"}
<span id='p'>{include file="assets/sidebar/sidebar.php"}</span> 

<script>
$(document).ready(function(){
    
        $("#p").hide();
});
</script>

</head>


	
<body class='bgimg'>
   <div class="w3-display-middle w3-center c">
        <span class="w3-text-white w3-jumbo w3-animate-top font fontweight"><b>MONEY<br>LOVER</b></span>
    </div>
	
 {if $show_table}
	
        <div class="well" id='table'>
            <form action="" method="post" name="Login_Form" onsubmit="return validateForm(this);">


                <tr>
                    <td colspan="2" align="left" valign="top"><h2 class='colorred' ><b><i>&nbsp;&nbsp;money lover</i></b>
                        </h2>
                        <h3 class='colorbrown' > please enter Username & Password</h3></td>
                    <br>
                </tr>
                <tr>
                    <td align="right" valign="top">
					<span class='backlightgrey paddd colorblack borderradiu' ><b>Username:</b></span>
                    </td>
                    <td><input name="username" type="text" class="Input fontbold backyellow" id='colorblue'></td>
                </tr>&nbsp;&nbsp;
                <tr>
                    <td align="right" ><span class='backlightgrey paddd colorblack borderradiu'><b>Password:</b></span>
                    </td>
                
					<td><input name="password" type="password" class="Input fontbold backyellow" id='colorblue'></td>
                </tr>
                <tr>
                    &nbsp;&nbsp;

                    <td>
                        <button name="submite" class='submite backlightgrey colorblack boxshadow' id="btnClick" type="submit" onclick="CountFun();">
                            <b>Submit</b>
                        </button>
                    </td>
                </tr>

            </form>
        </div>
    {/if}
	                       
	{if !$show_table}
<script type="text/javascript">$(document).ready(function() {   $("#p").show();  })
$(document).ready(function() {   bootbox.alert("<center><h1 class='colorred' >Wellcome</h1></center>");}) </script>
    {/if}

    {if $wrong_credentials}
	<script type="text/javascript">
	$(document).ready(function() { bootbox.alert("<h1 class='colorred center' >!Error:</h1>....<p class='colorblack' >please more care</p>");})</script>
	{/if}
	
	{if $honest_credentials}
	
       <script type="text/javascript"> $(document).ready(function() {  $("#p").show(); $("#table").hide();  bootbox.alert("<center><h1 class='colorred'>Wellcome</h1></center>");}) </script>
    {/if}

<h2 class="bottomright colorwhite dateindex" >
	{$date}
	</h2>

	</body>  
 
</html>
