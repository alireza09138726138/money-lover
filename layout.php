<?php
include("libs/smarty/Smarty.class.php");
include 'configg.php';
$include =include('session.php');
$date = date("d-m-Y ");

$smarty = new smarty();
$smarty->assign('date', $date);
$smarty->assign('login_id', $login_id);
$smarty->assign('login_session', $login_session);
$smarty->display("profile.tpl");
?>
