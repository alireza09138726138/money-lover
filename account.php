
<?php
include("libs/smarty/Smarty.class.php");
include 'configg.php';

$date = date("d-m-Y ");



// By default, produ.year is None and not NULL.
// That's why the following query will not return anything since
// all the rows in database will be created with year=None by default.
// Null is different than None!
$sql = "SELECT * FROM bank";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all ($result, MYSQLI_ASSOC);

$smarty = new smarty();
$smarty->assign('date', $date);
$smarty->assign('rows', $rows);
$smarty->display("account.tpl");




?>
