

<?php
include("libs/smarty/Smarty.class.php");
include 'configg.php';

$date = date("d-m-Y ");

$sql = "SELECT * FROM user";
$query = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all ($query, MYSQLI_ASSOC);


$smarty = new smarty();
$smarty->assign('date', $date);
$smarty->assign('rows', $rows);
$smarty->display("Username.tpl");
?>


