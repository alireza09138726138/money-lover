

<?php
include("libs/smarty/Smarty.class.php");
include 'configg.php';
$include =include('session.php');
$date = date("d-m-Y ");


$sql = "SELECT * FROM bank WHERE user_id = '".$login_id."'";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all ($result, MYSQLI_ASSOC);

$smarty = new smarty();
$smarty->assign('date', $date);
$smarty->assign('login_id', $login_id);
$smarty->assign('login_session', $login_session);
$smarty->assign('rows', $rows);
$smarty->display("account.tpl");




?>

