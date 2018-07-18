<?php
include("libs/smarty/Smarty.class.php");
include 'configg.php';
$include =include('session.php');
$date = date("d-m-Y ");

$honest_credentials = false;
$wrong_credentials = false;
$sum = null;
$rows =null;



if (isset($_POST['submite'])) {
    $startDate= mysqli_real_escape_string($conn,$_POST['startDate']);
	$endDate= mysqli_real_escape_string($conn,$_POST['endDate']);
    $result = mysqli_query($conn, "SELECT * FROM produ WHERE date >= '".$startDate."' AND date <= '".$endDate."' AND user_id = '".$login_id."'") or die(mysqli ($result));
	$rows = mysqli_fetch_all ($result, MYSQLI_ASSOC);
	
	$resultt = mysqli_query($conn,"SELECT sum(Price) FROM produ WHERE date >= '".$startDate."' AND date <= '".$endDate."' AND user_id = '".$login_id."'") or die(mysqli_error());
    $row = mysqli_fetch_array($resultt);
    $sum = $row['sum(Price)'];
    $honest_credentials = mysqli_num_rows($result) > 0;
	$wrong_credentials = mysqli_num_rows($result) <= 0;
}




$smarty = new smarty();
$smarty->assign('date', $date);
$smarty->assign('login_id', $login_id);
$smarty->assign('login_session', $login_session);
$smarty->assign('honest_credentials', $honest_credentials);
$smarty->assign('wrong_credentials', $wrong_credentials);
$smarty->assign('rows', $rows);
$smarty->assign('sum', $sum);
$smarty->display("times.tpl");
?>


