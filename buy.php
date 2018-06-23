<?php
include("libs/smarty/Smarty.class.php");
include 'configg.php';

$date = date("d-m-Y ");



$sql = "SELECT * FROM bank";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all ($result, MYSQLI_ASSOC);

$smarty = new smarty();
$smarty->assign('date', $date);
$smarty->assign('rows', $rows);
$smarty->display("buy.tpl");
?>
