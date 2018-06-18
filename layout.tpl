<html>
<head>
    <title>{block name="title"}Money Lover{/block}</title>
    {include file="assets/asset link-script/asset.php"}
    <style>
        body, html {
            height: 100%;
            font-family: "Inconsolata", sans-serif;
            background-color:black;
            overflow-y: hidden;
        }

        .bgimg {
            background-position: cover;
            background-size: 100% 100%;
            background-image: url("cash_and_gold-300x239-1.jpg");
            min-height: 100%;
            box-shadow: inset 0 0 0 10000px rgba(0.7, 0.9, 0.9, 0.19);
        }
    </style>
</head>

<body class='bgimg'>
    {include file="assets/sidebar/sidebar.php"}
    {block name="content"}{/block}
</body>
</html>
