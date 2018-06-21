<?php
include("libs/smarty/Smarty.class.php");
include 'configg.php';

$date = date("d-m-Y ");

$sql = "SELECT * FROM user WHERE username IS NOT NULL";
$query = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($query);
$show_table = $rows > 0;


$honest_credentials = false;
$wrong_credentials = false;


	if (isset($_POST['submite'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $result = mysqli_query($conn, "select * from user where username='" . $username . "' and password='" . $password . "'") or die(mysq($result));
    $wrong_credentials = mysqli_num_rows($result) <= 0;
	$honest_credentials = mysqli_num_rows($result) > 0;
}

$smarty = new smarty();
$smarty->assign('date', $date);
$smarty->assign('show_table', $show_table);
$smarty->assign('wrong_credentials', $wrong_credentials);
$smarty->assign('honest_credentials', $honest_credentials);
$smarty->display("index.tpl");
?>
