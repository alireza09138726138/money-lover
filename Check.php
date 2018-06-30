<?php
include("libs/smarty/Smarty.class.php");
include 'configg.php';

$date = date("d-m-Y ");
$date1=date("Y-m-d");

$sql1 = "SELECT * FROM `check1` WHERE pay6='$date1'";
$resultt = mysqli_query($conn, $sql1);
$rowss = mysqli_fetch_all($resultt, MYSQLI_ASSOC);
$show_alarm = $rowss > 0;


$sql = "SELECT * FROM `check1`";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all ($result, MYSQLI_ASSOC);

$smarty = new smarty();
$smarty->assign('date', $date);
$smarty->assign('show_alarm', $show_alarm);
$smarty->assign('rows', $rows);
$smarty->assign('rowss', $rowss);
$smarty->display("Check.tpl");
?>
