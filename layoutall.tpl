<html>
<head>
    <title>{block name="title"}Money Lover{/block}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {include file="assets/asset link-script/asset.php"}
    {block extra_header}{/block}
</head>


<body style='background-color: #808080;'>
{include file="assets/sidebar/sidebar.php"}
<div class="jumbotron text-center" style='border:1px solid hsl(0, 100%, 25%)'>
    

    <h3 style='color:black;font-family: "Times New Roman", Times, serif;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Money
        lover</h3>

    <!-- date to show in php -->
    <div class="pull-right">
        <h3 style='color:blue' id='date'>{$date}</h3>
    </div>
</div>
{block name="content"}

{/block}
 </body>

</html>