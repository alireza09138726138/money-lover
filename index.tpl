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

        body, html {
            height: 100%;
            font-family: "Inconsolata", sans-serif;
            background-color: black;
        }

        .bgimg {
            background-position: cover;
            background-size: 100% 100%;
            background-image: url("picture/cash_and_gold-300x239-1.jpg");
            min-height: 100%;
            box-shadow: inset 0 0 0 10000px rgba(0.7, 0.9, 0.9, 0.19);
        }
    </style>
    <script>
        $(document).ready(function () {
            $("#p").hide();
        });
    </script>
</head>
<body class='bgimg'>

<!-- Sidebar -->
<nav class="w3-sidebar w3-black w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-black w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
        <i class="fa fa-remove"></i>
    </a>
    <div class="w3-bar-block w3-center">
        <a href="/" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><i class="fa fa-home" style="font-size:18px;color:red">&nbsp;&nbsp;</i><h3>Home</h3></a>
        <a href="explain.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Explain</h3></a>
        <a href="Username.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><i class="fa fa-key" style="font-size:18px;color:red">&nbsp;&nbsp;</i><h3>Creat password</h3></a>
        <a href="account.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Creat new account</h3></a>
        <a href="buy.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Cost management(buy)</h3></a>
        <a href="year.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><i class="fa fa-calendar-check-o" style="font-size:18px;color:red">&nbsp;&nbsp;</i><h3>Expenditure of year </h3></a>
        <a href="month.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Expenditure of year,month </h3></a>
        <a href="day.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Expenditure of year,month,day </h3></a>
        <a href="update.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Cost update (report of last bound to cost)</h3></a>
        <a href="times.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Expenditure of between times</a>
        <a href="Expenditure.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Expenditure of between times with product name</h3></a>
        <a href="Report.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Report to expenditure of kind</h3></a>
        <a href="Check.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"><h3>Check management</h3></a>
    </div>
    </div>
</nav>


<!-- font-awesome for sidebar -->
<span class="w3-button w3-xxlarge  w3-right" style='color:white' onclick="w3_open()"><i class="fa fa-bars"></i></span>

<h1 style="color: white">Money Lover Index</h1>
{*{include file={$password_template}}*}

</body>
</html>
