<?php
include("libs/smarty/Smarty.class.php");
include 'configg.php';

$date = date("d-m-Y ");






$smarty = new smarty();
$smarty->assign('date', $date);

$smarty->display("explain.tpl");
?>

