<html>
<head>
    <title>{block name="title"}Money Lover{/block}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    {include file="assets/asset link-script/asset.php"}
    {block extra_header}
	
{/block}
</head>


<body class="color">  

{include file="assets/sidebar/sidebar.php"}
<div class="jumbotron text-center bord">


    <h3 class="colorblack font">Money lover</h3>

<h3 class='pull-left'>Welcome : <i style='color:brown'>..{$login_session}</i></h3>  


<!-- date to show in php -->
    <div class="pull-right">
        <h3 class='colordate' >{$date}</h3>
		<p  class='pull-left' style='color:red'>
		
		<a href="logout.php"><button type="button" class="btn btn-default">Log Out</button></a>
		</p>
    </div>
</div>
{block name="content"}

{/block}

</body>
</html>
