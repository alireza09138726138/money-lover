<!DOCTYPE html>
<html lang="en">
<head>
    <title>{$title}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    {include file="asset.php"}
    <style>
        .bgimg {
            background-position: cover;
            background-size: 100% 100%;
            background-image: url("picture/cash_and_gold-300x239-1.jpg");
            min-height: 100%;
            box-shadow: inset 0 0 0 10000px rgba(0.7, 0.9, 0.9, 0.19);
        }
    </style>
<body class='bgimg'>
<script>
    $(document).ready(function () {
        $("#p").hide();
    });
</script>

{include file={$password_template}}

</body>
</html>
