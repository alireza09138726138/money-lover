
<?php
include("libs/smarty/Smarty.class.php");
include 'configg.php';

$date = date("d-m-Y ");

$sql = "SELECT * FROM produc WHERE year IS NULL";
$query = mysqli_query($conn, $sql);

while ($ro[] = mysqli_fetch_assoc($query)){};





$smarty = new smarty();
$smarty->assign('ro', $ro);
$smarty->display("account.tpl");
?>

