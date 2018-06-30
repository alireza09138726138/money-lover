<?php
include("libs/smarty/Smarty.class.php");
include 'configg.php';

$date = date("d-m-Y ");

$wrong_credentials = false;
$honest_credentials = false;
$sum = null;
$rows =null;


	if (isset($_POST['submite'])) {
    $YEAR = mysqli_real_escape_string($conn, $_POST['YEAR']);
    $result = mysqli_query($conn, "select * from produ where Price IS NOT NULL AND year='".$YEAR."'") or die(mysqli ($result));
	$rows = mysqli_fetch_all ($result, MYSQLI_ASSOC);
	
	$resultt = mysqli_query($conn,"SELECT sum(Price) FROM produ where year='".$YEAR."'") or die(mysqli_error());
    $row = mysqli_fetch_array($resultt);
    $sum = $row['sum(Price)'];	
    $wrong_credentials = mysqli_num_rows($result) <= 0;
	$honest_credentials = mysqli_num_rows($result) > 0;
}




$smarty = new smarty();
$smarty->assign('date', $date);
$smarty->assign('sum', $sum);
$smarty->assign('rows', $rows);
$smarty->assign('wrong_credentials', $wrong_credentials);
$smarty->assign('honest_credentials', $honest_credentials);
$smarty->display("year.tpl");
?>

