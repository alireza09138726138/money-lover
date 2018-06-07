<?php
include("libs/smarty/Smarty.class.php");
include 'configg.php';

$sql = "SELECT * FROM user WHERE username IS NOT NULL";
$query = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($query);
$password_template = null;

if ($rows > 0) {
    $password_template = "passwordindex.php";
} else {
    $password_template = "passwordindexnot.php";
}

$smarty = new Smarty;
$smarty->assign('title', 'Money lover');
$smarty->assign('password_template', $password_template);

$smarty->display('index.tpl');
