<?php
include("libs/smarty/Smarty.class.php");
include 'configg.php';
$include =include('session.php');
$date = date("d-m-Y ");
$date1=date("Y-m-d");

$wrong_credentials = false;
$honest_credentials = false;

$sql1 = "SELECT * FROM `checkk` WHERE datealarm='$date1' AND user_id = '".$login_id."'";
$resultt = mysqli_query($conn, $sql1);
$rowss = mysqli_fetch_all($resultt, MYSQLI_ASSOC);
$show_alarm = $rowss > 0;


$sql = "SELECT * FROM `checkk` WHERE user_id = '".$login_id."'";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all ($result, MYSQLI_ASSOC);
$wrong_credentials = mysqli_num_rows($result) <= 0;
$honest_credentials = mysqli_num_rows($result) > 0;

$smarty = new smarty();
$smarty->assign('date', $date);
$smarty->assign('login_id', $login_id);
$smarty->assign('login_session', $login_session);
$smarty->assign('show_alarm', $show_alarm);
$smarty->assign('honest_credentials', $honest_credentials);
$smarty->assign('rows', $rows);
$smarty->assign('rowss', $rowss);
$smarty->display("Check.tpl");
?>
