<?php
include("libs/smarty/Smarty.class.php");
include 'configg.php';
$include =include('session.php');
$date = date("d-m-Y ");

$wrong_credentials = false;
$honest_credentials = false;
$sum = null;
$rows =null;
$resulttt =null;

$sql="SELECT DISTINCT name FROM produ WHERE !Price='' AND user_id = '".$login_id."'";
$result=mysqli_query($conn,$sql);
$resulttt = mysqli_fetch_all ($result, MYSQLI_ASSOC);

	if (isset($_POST['submite'])) {
		    $startDate= mysqli_real_escape_string($conn,$_POST['startDate']);
            $endDate= mysqli_real_escape_string($conn,$_POST['endDate']);
			$product= mysqli_real_escape_string($conn,$_POST['product']);
$result = mysqli_query($conn, "SELECT * FROM produ WHERE date >= '".$startDate."' AND date <= '".$endDate."' and name='".$product."' AND user_id = '".$login_id."'") or die(mysqli ($result));
	$rows = mysqli_fetch_all ($result, MYSQLI_ASSOC);
	
$resultt = mysqli_query($conn,"SELECT sum(Price) FROM produ WHERE date >= '".$startDate."' AND date <= '".$endDate."' and name='".$product."' AND user_id = '".$login_id."'") or die(mysqli_error());
    $row = mysqli_fetch_array($resultt);
    $sum = $row['sum(Price)'];	
    $wrong_credentials = mysqli_num_rows($result) <= 0;
	$honest_credentials = mysqli_num_rows($result) > 0;
}




$smarty = new smarty();
$smarty->assign('date', $date);
$smarty->assign('login_id', $login_id);
$smarty->assign('login_session', $login_session);
$smarty->assign('resulttt', $resulttt);
$smarty->assign('sum', $sum);
$smarty->assign('rows', $rows);
$smarty->assign('wrong_credentials', $wrong_credentials);
$smarty->assign('honest_credentials', $honest_credentials);
$smarty->display("Expenditure.tpl");
?>



