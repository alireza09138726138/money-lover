<?php
include("libs/smarty/Smarty.class.php");
include 'configg.php';
$date=date("d-m-Y ");;

$smarty = new Smarty;
$smarty->assign('title', 'Money lover');

$smarty->assign('date', $date);
$smarty->display('home.tpl');
?>

