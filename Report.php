<?php
include("libs/smarty/Smarty.class.php");
include 'configg.php';

$date = date("d-m-Y ");

$honest_credentials = false;
$sum = null;
$rows =null;


$result = mysqli_query($conn, "SELECT DISTINCT Comment FROM produ WHERE !Price=''") or die(mysqli_error ($result));
$rowss = mysqli_fetch_all ($result, MYSQLI_ASSOC);


$show_table = $rowss > 0;


	if (isset($_POST['submite'])) {
    $product= mysqli_real_escape_string($conn,$_POST['product']);
    $result = mysqli_query($conn, "SELECT * FROM produ WHERE Comment='".$product."'") or die(mysqli ($result));
	$rows = mysqli_fetch_all ($result, MYSQLI_ASSOC);
	
	$resultt = mysqli_query($conn,"SELECT sum(Price) FROM produ WHERE Comment='".$product."'") or die(mysqli_error());
    $row = mysqli_fetch_array($resultt);
    $sum = $row['sum(Price)'];
    $honest_credentials = mysqli_num_rows($result) > 0;
}




$smarty = new smarty();
$smarty->assign('date', $date);
$smarty->assign('show_table', $show_table);
$smarty->assign('honest_credentials', $honest_credentials);
$smarty->assign('rowss', $rowss);
$smarty->assign('rows', $rows);
$smarty->assign('sum', $sum);
$smarty->display("Report.tpl");
?>
