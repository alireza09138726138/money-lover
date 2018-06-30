<?php
include("libs/smarty/Smarty.class.php");
include 'configg.php';

$date = date("d-m-Y ");

$show_table = false;
$wrong_credentials = false;
$show = true;
$resultt =null;
$ro =null;

$sql = "SELECT * FROM bank";
$query = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all ($query, MYSQLI_ASSOC);
$show_table = $rows > 0;


$honest_credentials = false;
$wrong_credentials = false;


	if (isset($_POST['submite'])) {
    $bank = mysqli_real_escape_string($conn, $_POST['bank']);
    $Account = mysqli_real_escape_string($conn, $_POST['Account']);
    $result = mysqli_query($conn, "select * from produ where bank='".$bank."' and Account='".$Account."' ORDER BY id DESC LIMIT 0 , 1") or die(mysqli_error ($result));
	$ro = mysqli_fetch_all ($result, MYSQLI_ASSOC);
    $wrong_credentials = mysqli_num_rows($result) <= 0;
	$honest_credentials = mysqli_num_rows($result) > 0;
}

if (isset($_POST['submite1']))
 {
	 $bank=$_POST['bank'];
	 $Account=$_POST['Account'];
	 $cost=$_POST['cost'];
     $Limite=$_POST['Limite'];
	 $sql = "SELECT * FROM `produ` WHERE bank='".$bank."' AND Account='".$Account."' ORDER BY id DESC LIMIT 0 , 1;";   
	 $query =  mysqli_query($conn, $sql);
	 $data = mysqli_fetch_array($query);
	 $cost1 =$data['cost'];
	 $cost2 =$cost1 + $cost;
	 $sql ="INSERT INTO `produ` (`id`, `cost`, `bank`, `Account`, `Limite`) VALUES (NULL,'$cost2', '$bank','$Account' ,'$Limite')";				
     $resultt=mysqli_query($conn,$sql);
	 
 }


$smarty = new smarty();
$smarty->assign('date', $date);
$smarty->assign('show_table', $show_table);
$smarty->assign('wrong_credentials', $wrong_credentials);
$smarty->assign('honest_credentials', $honest_credentials);
$smarty->assign('rows', $rows);

$smarty->assign('ro', $ro);
$smarty->assign('resultt', $resultt);
$smarty->display("update.tpl");
?>
